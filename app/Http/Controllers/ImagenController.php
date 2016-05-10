<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PaqueteImagen;
use App\Paquete;
use Image;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('imagen');
        $file_path = $file->path();
        $params = $request->except(['_token']);

        $originalName = str_replace([' ', '-'], '_', $file->getClientOriginalName());
        $imageName = strtolower(str_random(4)) . '_' . $originalName;
        $thumb_imageName = 'thumb_' . $imageName;

        try {
            // Reajusta el tamaño de la imagen
            Image::make($file_path)->resize(260, null, function($contraint) {
                $contraint->aspectRatio();
            })->save( 'img/paquetes/' . $thumb_imageName);

            // Guarda la imagen con las dimensiones originalaes
            $file->move('img/paquetes/', $imageName);
        } catch (Exception $ex) {
            return redirect()->back()->with('error_message', 'Ups... no se puede procesar el archivo subido, intentelo de nuevo, si persiste contacte con el programador');
        }

        $params['imagen'] = $imageName;
        $params['imagen_chica'] = $thumb_imageName;
        PaqueteImagen::create($params);

        return redirect()->back()->with('success_message', 'Imagen agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imagenes = PaqueteImagen::where('paquete_id', $id)->get();
        $paquete = Paquete::find($id);
        $paq_nombre = $paquete->paq_nombre;
        return view('admin.imagenes', compact('imagenes', 'paq_nombre', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $imagen = PaqueteImagen::find($id);
        $imagen->fill($request->except('_token'));
        $imagen->save();

        return redirect()->back()->with('success_message', 'Imagen actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
