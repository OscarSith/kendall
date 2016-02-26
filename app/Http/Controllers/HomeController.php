<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	return view('welcome');
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
