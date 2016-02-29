<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
    	$categorias = Categoria::latest()->get(['id', 'nombre', 'estado']);
    	return view('admin.categoria', compact('categorias'));
    }
}
