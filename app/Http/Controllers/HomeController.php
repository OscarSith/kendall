<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Paquete;
use App\PaqueteImagen;
use Mail;
use Route;

class HomeController extends Controller
{
    public function index()
    {
        $fields = ['id', 'paq_nombre', 'paq_titulo', 'paq_precio', 'paq_imagen_principal'];
        $ofertas = Paquete::actives()->latest()->take(8)->get($fields);
        $nacionales = Paquete::actives()->where('paq_categoria', 1)->latest()->take(7)->get($fields);
        $internacionales = Paquete::actives()->where('paq_categoria', 2)->latest()->take(7)->get($fields);
        $currentUri = $this->getCurrentUri();

    	return view('welcome', compact('ofertas', 'nacionales', 'internacionales', 'currentUri'));
    }

    public function contacto()
    {
        $currentUri = $this->getCurrentUri();
    	return view('contacto', compact('currentUri'));
    }

    public function nosotros()
    {
        $currentUri = $this->getCurrentUri();
    	return view('nosotros', compact('currentUri'));
    }

    public function paquetes()
    {
        $currentUri = $this->getCurrentUri();
        $fields = [
            'id',
            'paq_nombre',
            'paq_imagen_principal',
            'paq_precio',
        ];
        $nacionales = Paquete::actives()->where('paq_categoria', 1)->get($fields);
        $internacionales = Paquete::actives()->where('paq_categoria', 2)->get($fields);

    	return view('paquetes', compact('nacionales', 'internacionales', 'currentUri'));
    }

    public function detallePaquete(Request $request, $id)
    {
        // http://openweathermap.org/weather-data#current
        // http://api.openweathermap.org/data/2.5/weather?q=Lima,PE
        $currentUri = $this->getCurrentUri();
        $paquete = Paquete::find($id, ['id', 'paq_nombre', 'paq_titulo', 'paq_descripcion', 'paq_imagen_principal', 'paq_precio']);
        $imagenes = PaqueteImagen::where('paquete_id', $id)->where('estado', 1)->get(['imagen', 'imagen_chica', 'seleccionado']);

        return view('detalle-paquete', compact('paquete', 'imagenes', 'currentUri'));
    }

    public function sendMessage(Request $request)
    {
        Mail::send('partials.send-mail', $request->all(), function($message) use ($request) {
            $message->to(env('TO_ADDRESS'), env('TO_NAME'))->subject($request->input('titulo'));
            // root@kendallperutravel.com Joaquin
        });
        return redirect()->back()->with('success_message', 'Su mensaje ha sido enviado con exito.');
    }

    private function getCurrentUri()
    {
        return Route::current()->uri();
    }
}
