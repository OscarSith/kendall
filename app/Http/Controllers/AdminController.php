<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Paquete;
use App\PaqueteImagen;
use Image;

class AdminController extends Controller
{
	private $path_paquetes = 'img/paquetes/';

    public function index()
    {
    	$paquetes = Paquete::latest()->get(['id', 'paq_nombre', 'paq_titulo', 'paq_imagen_principal', 'paq_estado', 'paq_categoria']);
    	return view('admin.home', compact('paquetes'));
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
    	$file_path = $file->path();
    	$params = $request->except(['_token']);

    	$originalName = str_replace([' ', '-'], '_', $file->getClientOriginalName());
    	$imageName = strtolower(str_random(4)) . '_' . $originalName;
    	$thumb_imageName = 'thumb_' . $imageName;

    	try {
	    	// Reajusta el tamaño de la imagen
	    	Image::make($file_path)->resize(260, null, function($contraint) {
	    		$contraint->aspectRatio();
	    	})->save( $this->path_paquetes . $thumb_imageName);

	    	// Guarda la imagen con las dimensiones originalaes
	    	$file->move($this->path_paquetes, $imageName);
    	} catch (Exception $ex) {
    		return redirect()->back()->with('error_message', 'Ups... no se puede procesar el archivo subido, intentelo de nuevo, si persiste contacte con el programador');
    	}

        $params['paq_imagen_principal'] = $thumb_imageName;
    	\DB::transaction(function() use ($params, $thumb_imageName) {

			$paquete = Paquete::create($params);

			$imageParams = [
				'paquete_id' => $paquete->getKey(),
				'imagen' => $params['paq_imagen_principal'],
				'imagen_chica' => $thumb_imageName,
                'seleccionado' => 'S'
			];
			PaqueteImagen::create($imageParams);
		});

    	return redirect()->back()->with('success_message', 'Imagen guardad con exito');
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
    	$paquete = Paquete::find($id);
    	$paquete->fill($request->except('_token'));
    	$paquete->save();

    	return redirect()->route('dashboard')->with('success_message', 'Paquete ' . $request->input('paq_nombre') . ' actualizado con exito.');
    }

    private function categorias()
    {
    	return array_merge([0 => 'Seleccione categoria'], Categoria::where('estado', 1)->get(['id', 'nombre'])->lists('nombre', 'id')->all());
    }
}
