<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryRequest;
use App\Country;
use App\Paquete;

class CountryController extends Controller
{
	private $path_paquetes = 'img/paises/';

	public function index($country)
	{
		$country = Country::where('co_nombre_slug', $country)->first(['id', 'co_nombre']);
		$paquetes = Paquete::getByCountry($country->id)->get(['id', 'paq_nombre', 'paq_titulo', 'paq_precio', 'paq_imagen_principal', 'paq_estado']);

		$name = $country->co_nombre;
		$country_id = $country->id;

		return view('admin.paquetes-country', compact('paquetes', 'name', 'country_id'));
	}

	public function store(CountryRequest $request)
	{
		$file = $request->file('co_imagen');
		$params = $request->except(['_token']);

		list($x, $thumb_imageName) = $this->rezizeImg($file, $this->path_paquetes, false);

		$params['co_nombre_slug'] = str_slug($params['co_nombre']);
		$params['co_imagen'] = $thumb_imageName;
		Country::create($params);

		return redirect()->back()->with('success_message', 'País ' . $params['co_nombre'] . ' agregado con exito');
	}
}
