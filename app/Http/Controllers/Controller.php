<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function rezizeImg($file, $path, $originalImage = true)
    {
    	$imageName = strtolower(str_random(4)) . '_' . str_replace([' ', '-'], '_', $file->getClientOriginalName());
    	$thumb_imageName = 'thumb_' . $imageName;

    	try {
            // Reajusta el tamaño de la imagen
    		Image::make($file->path())->resize(280, null, function($contraint) {
    			$contraint->aspectRatio();
    		})->save( $path . $thumb_imageName);

    		if ($originalImage) {
		    	// Guarda la imagen con las dimensiones originalaes
		    	$file->move($path, $imageName);
    		}

    		return [$imageName, $thumb_imageName];
    	} catch (Exception $ex) {
    		return redirect()->back()->with('error_message', 'Ups... no se puede procesar el archivo subido, intentelo de nuevo, si persiste contacte con el programador');
    	}
    }
}
