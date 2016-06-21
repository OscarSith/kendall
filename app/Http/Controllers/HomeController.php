<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PaqueteImagen;
use App\Paquete;
use App\Country;
use App\Categoria;
use Mail;
use Route;

class HomeController extends Controller
{
    private $fields = ['paquetes.id', 'paq_nombre', 'paq_titulo', 'paq_descripcion', 'paq_precio', 'paq_imagen_principal', 'paq_pais'];

    public function index()
    {
        $ofertas = Paquete::actives()->latest()->take(8)->get($this->fields);
        $ofertas = $ofertas->sortBy($this->fields[1]);

        $nacionales = Paquete::actives()->getByCategoria(1, $this->fields);
        $nacionales = $nacionales->sortBy($this->fields[1]);

        $internacionales = Paquete::actives()->getByCategoria(2, $this->fields);
        $internacionales = $internacionales->sortBy($this->fields[1]);
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

    public function countries()
    {
        $currentUri = $this->getCurrentUri();
        $nacionales = Paquete::actives()->where('paq_categoria', 1)->get($this->fields);
        $nacionales = $nacionales->sortBy($this->fields[1]);

        $internacionales = Paquete::actives()->where('paq_categoria', 2)->get($this->fields);
        $internacionales = $internacionales->sortBy($this->fields[1]);

    	return view('paquetes', compact('nacionales', 'internacionales', 'currentUri'));
    }

    public function detallePaquete(Request $request, $id, $paq_nombre)
    {
        $currentUri = $this->getCurrentUri();
        $paquete = Paquete::find($id, $this->fields);
        $imagenes = PaqueteImagen::where('paquete_id', $id)->where('estado', 1)->get(['imagen', 'imagen_chica', 'seleccionado']);

        $othersPaquetes = Paquete::where('paq_pais', $paquete->paq_pais)->take(8)->get($this->fields);

        if (!$othersPaquetes->isEmpty()) {
            $othersPaquetes = $othersPaquetes->filter(function($val, $key) use ($id) {
                return $val->id != $id;
            });
            $totalPaquetes = $othersPaquetes->count();
            if ($totalPaquetes > 1) {
                $othersPaquetes = $othersPaquetes->random($totalPaquetes > 4 ? 4 : $totalPaquetes);
            }
        }

        return view('detalle-paquete', compact('paquete', 'imagenes', 'currentUri', 'othersPaquetes'));
    }

    public function sendMessage(Request $request)
    {
        Mail::send('partials.send-mail', $request->all(), function($message) use ($request) {
            $message->to(env('TO_ADDRESS'), env('TO_NAME'))->subject($request->input('titulo'));
            // root@kendallperutravel.com Joaquin
        });
        return redirect()->back()->with('success_message', 'Su mensaje ha sido enviado con exito.');
    }

    public function paquetesByCountry($country)
    {
        $country = Country::where('co_nombre_slug', $country)->first(['id', 'co_nombre']);
        $paquetes = Paquete::actives()->where('paq_pais', $country->id)->get($this->fields);
        $name = $country->co_nombre;
        $currentUri = $this->getCurrentUri();

        return view('paquetesByCountry', compact('paquetes', 'name', 'currentUri'));
    }

    public function countriesByCategoria($categoria)
    {
        $categoriaID = Categoria::where('nombre', strtolower($categoria))->pluck('id')->first();
        $countries = Country::where('co_categoria', $categoriaID)->get(['id', 'co_nombre', 'co_imagen', 'co_nombre_slug']);

        $currentUri = $this->getCurrentUri();

        return view('countries', compact('countries', 'currentUri'));
    }

    private function getCurrentUri()
    {
        return Route::current()->uri();
    }
}
