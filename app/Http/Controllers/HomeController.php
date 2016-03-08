<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Paquete;
use App\PaqueteImagen;
use Mail;

class HomeController extends Controller
{
    public function index()
    {
        $nacionales = Paquete::where('paq_estado', 1)->latest()->take(4)->get(['id', 'paq_nombre', 'paq_titulo', 'paq_imagen_principal']);
    	return view('welcome', compact('nacionales'));
    }

    public function contacto()
    {
    	return view('contacto');
    }

    public function nosotros()
    {
    	return view('nosotros');
    }

    public function paquetes()
    {
        $paquetes = Paquete::where('paq_estado', 1)->get([
            'id',
            'paq_nombre',
            'paq_imagen_principal',
            'paq_precio',
        ]);
    	return view('paquetes', compact('paquetes'));
    }

    public function detallePaquete(Request $request, $id)
    {
        // http://openweathermap.org/weather-data#current
        // http://api.openweathermap.org/data/2.5/weather?q=Lima,PE
        $paquete = Paquete::find($id, ['id', 'paq_nombre', 'paq_titulo', 'paq_descripcion', 'paq_imagen_principal']);
        $imagenes = PaqueteImagen::where('paquete_id', $id)->where('estado', 1)->get(['imagen', 'imagen_chica', 'seleccionado']);
        return view('detalle-paquete', compact('paquete', 'imagenes'));
    }

    public function sendMessage(Request $request)
    {
        Mail::send('partials.send-mail', $request->all(), function($message) use ($request) {
            $message->to(env('TO_ADDRESS'), env('TO_NAME'))->subject($request->input('titulo'));
            // root@kendallperutravel.com Joaquin
        });
        return redirect()->back()->with('success_message', 'Su mensaje ha sido enviado con exito.');
    }
}
