<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Paquete;

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
    	return view('paquetes');
    }
}
