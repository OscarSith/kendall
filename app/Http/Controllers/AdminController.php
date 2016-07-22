<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Paquete;
use App\PaqueteImagen;
use App\Country;
use Image;
use File;

class AdminController extends Controller
{
	private $path_paquetes = 'img/paquetes/';

    public function index(Request $request)
    {
        $catId = 1;
        if ($request->has('cat')) {
            $catId = $request->input('cat');
        }

        $countries = Country::where('co_categoria', $catId)->get(['id', 'co_nombre', 'co_imagen', 'co_nombre_slug']);
        $categorias = Categoria::all(['id', 'nombre']);
    	return view('admin.home', compact('countries', 'categorias', 'catId'));
    }

    public function showPaquete(Request $request, $country, $country_id = null)
    {
    	$accion = 'Nuevo';
        $tipo = $request->has('tipo') ? 'O' : 'P';

        if ($country_id == 0) {
            $country_id = Country::all();
        }

    	return view('admin.paquete', compact('accion', 'country', 'country_id', 'tipo'));
    }

    public function storePaquete(Request $request)
    {
    	$file = $request->file('paq_imagen_principal');
    	$params = $request->except(['_token']);

        list($imageName, $thumb_imageName) = $this->rezizeImg($file, $this->path_paquetes);

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

        if ($params['paq_tipo'] == 'O') {
            $params['country_slug'] = Country::where('id', $params['paq_pais'])->pluck('co_nombre_slug')->first();
            return redirect()->route('promociones')->with('success_message', 'Promocion Agregada');
        }

    	return redirect()->route('getCountries', [$params['country_slug']])->with('success_message', 'Paquete agregado');
    }

    public function edit(Request $request, $country, $country_id, $id)
    {
    	$paquete = Paquete::find($id);
    	$accion = 'Editar';
        $tipo = $request->has('tipo') ? 'O' : 'P';

        if ($tipo == 'O') {
            $country = Country::where('id', $country_id)->pluck('co_nombre')->first();
        }

    	return view('admin.paquete', compact('paquete', 'accion', 'country', 'country_id', 'tipo'));
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
            if ($imagen_id) {
                PaqueteImagen::find($imagen_id)->update(['imagen' => $imageName, 'imagen_chica' => $thumb_imageName]);
            } else {
                PaqueteImagen::create([
                    'paquete_id' => $id,
                    'imagen' => $imageName,
                    'imagen_chica' => $thumb_imageName,
                    'seleccionado' => 'S'
                ]);
            }
        }

        $paquete->fill($params);
        $paquete->save();

        $success_message = 'Paquete ' . $params['paq_nombre'] . ' actualizado con exito.';

        if ($params['paq_tipo'] == 'O') {
            return redirect()->route('promociones')->with('success_message', $success_message);
        }
    	return redirect()->route('getCountries', [$params['country_slug']])->with('success_message', $success_message);
    }

    public function promo()
    {
        $promociones = Paquete::getByCountry(null, 'O')->get(['id', 'paq_nombre', 'paq_titulo', 'paq_descripcion', 'paq_precio', 'paq_imagen_principal', 'paq_pais']);
        return view('admin.promo', compact('promociones'));
    }

    private function categorias()
    {
    	return array_merge([0 => 'Seleccione categoria'], Categoria::where('estado', 1)->get(['id', 'nombre'])->lists('nombre', 'id')->all());
    }
}
