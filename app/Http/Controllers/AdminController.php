<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Paquete;
use App\PaqueteImagen;
use Image;
use File;

class AdminController extends Controller
{
	private $path_paquetes = 'img/paquetes/';

    public function index()
    {
        $paquetes = Paquete::latest()->get(['id', 'paq_nombre', 'paq_titulo', 'paq_imagen_principal', 'paq_estado', 'paq_categoria']);
        $categorias = Categoria::get();
    	return view('admin.home', compact('paquetes', 'categorias'));
    }

    public function showPaquete()
    {
    	$categorias = $this->categorias();
    	$accion = 'Nuevo';
    	return view('admin.paquete', compact('categorias', 'accion'));
    }

    public function storePaquete(Request $request)
    {
    	$file = $request->file('paq_imagen_principal');
    	$params = $request->except(['_token']);

    	$imageName = strtolower(str_random(4)) . '_' . str_replace([' ', '-'], '_', $file->getClientOriginalName());
    	$thumb_imageName = 'thumb_' . $imageName;

    	try {
	    	// Reajusta el tamaño de la imagen
	    	Image::make($file->path())->resize(280, null, function($contraint) {
	    		$contraint->aspectRatio();
	    	})->save( $this->path_paquetes . $thumb_imageName);

	    	// Guarda la imagen con las dimensiones originalaes
	    	$file->move($this->path_paquetes, $imageName);
    	} catch (Exception $ex) {
    		return redirect()->back()->with('error_message', 'Ups... no se puede procesar el archivo subido, intentelo de nuevo, si persiste contacte con el programador');
    	}

        $params['paq_imagen_principal'] = $thumb_imageName;
    	\DB::transaction(function() use ($params, $imageName) {

			$paquete = Paquete::create($params);

			$imageParams = [
				'paquete_id' => $paquete->getKey(),
				'imagen' => $imageName,
				'imagen_chica' => $params['paq_imagen_principal'],
                'seleccionado' => 'S'
			];
			PaqueteImagen::create($imageParams);
		});

    	return redirect()->back()->with('success_message', 'Imagen guardada con exito');
    }

    public function edit($id)
    {
    	$paquete = Paquete::find($id);
    	$categorias = $this->categorias();
    	$accion = 'Editar';

    	return view('admin.paquete', compact('paquete', 'categorias', 'accion'));
    }

    public function update(Request $request, $id)
    {
        $imageEdited = false;
        if ($request->hasFile('paq_imagen_principal')) {
            $params = $request->except(['_token']);
            $file = $request->file('paq_imagen_principal');
            $imageName = strtolower(str_random(4)) . '_' . str_replace([' ', '-'], '_', $file->getClientOriginalName());
            $thumb_imageName = 'thumb_' . $imageName;

            try {
                // Reajusta el tamaño de la imagen
                Image::make($file->path())->resize(280, null, function($contraint) {
                    $contraint->aspectRatio();
                })->save( $this->path_paquetes . $thumb_imageName, 98);

                // Guarda la imagen con las dimensiones originalaes
                $file->move($this->path_paquetes, $imageName);

                $params['paq_imagen_principal'] = $thumb_imageName;
                $imageEdited = true;
            } catch (Exception $ex) {
                return redirect()->back()->with('error_message', 'Ups... no se puede procesar el archivo subido, intentelo de nuevo, si persiste contacte con el programador');
            }
        } else {
            $params = $request->except(['_token', 'paq_imagen_principal']);
        }

    	$paquete = Paquete::find($id);

        if ($imageEdited) {
            File::delete($this->path_paquetes . $paquete->paq_imagen_principal);
            File::delete($this->path_paquetes . substr($paquete->paq_imagen_principal, 6));
            $imagen_id = PaqueteImagen::where('paquete_id', $id)->pluck('id')->first();
            PaqueteImagen::find($imagen_id)->update(['imagen' => $imageName, 'imagen_chica' => $thumb_imageName]);
        }

        $paquete->fill($params);
        $paquete->save();

    	return redirect()->route('dashboard')->with('success_message', 'Paquete ' . $params['paq_nombre'] . ' actualizado con exito.');
    }

    private function categorias()
    {
    	return array_merge([0 => 'Seleccione categoria'], Categoria::where('estado', 1)->get(['id', 'nombre'])->lists('nombre', 'id')->all());
    }
}
