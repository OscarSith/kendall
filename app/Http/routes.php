<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function ($route) {
    $route->get('/login', 'Auth\AuthController@showLoginForm');
    $route->post('login', 'Auth\AuthController@login');
});

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin'], function ($route) {
    $route->get('/', 'AdminController@index')->name('dashboard');

    $route->get('/pais/{country}-{country_id}/paquete', 'AdminController@showPaquete')->name('formPaquete');
    $route->post('/pais/add-paquete', 'AdminController@storePaquete')->name('addPaquete');
    $route->get('/editar-paquete/{id}', 'AdminController@edit')->name('formEditPaquete');
    $route->put('/{id}/editar', 'AdminController@update')->name('editPaquete');
    $route->put('/cambiar-estado-paquete/{id}', 'AdminController@changeState')->name('changeStatusPaquete');

    // Country
    $route->post('/add-country', 'CountryController@store')->name('country');
    $route->get('/pais/{country}', 'CountryController@index')->name('getCountries');

    // Imagen
    $route->get('imagenes/{id}', 'ImagenController@show')->name('showImages');
    $route->post('insertar-imagen', 'ImagenController@store')->name('addImagen');
    $route->put('/cambiar-estado-imagen/{id}', 'ImagenController@update')->name('changeStatusImagen');
    $route->delete('/eliminar-imagen/{id}', 'ImagenController@destroy')->name('deleteImagen');

    $route->get('categoria', 'CategoriaController@index')->name('categoria');

    $route->get('logout', 'Auth\AuthController@getLogout')->name('salir');
});


Route::get('/', 'HomeController@index');
Route::get('contacto', 'HomeController@contacto');
Route::get('nosotros', 'HomeController@nosotros');
Route::get('{country}', 'HomeController@paquetesByCountry')->name('paquetesByCountry');
Route::get('paises/{categoria}', 'HomeController@countriesByCategoria')->name('countriesByCategoria');
Route::get('detalle-paquete/{id}-{paq_nombre}', 'HomeController@detallePaquete')->name('detallePaquete');
Route::post('cotizar-paquete-{id}', 'HomeController@detallePaquete')->name('sendNotification');
Route::post('enviar-mensaje', 'HomeController@sendMessage')->name('send-message');