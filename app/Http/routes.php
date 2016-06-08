<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('contacto', 'HomeController@contacto');
Route::get('nosotros', 'HomeController@nosotros');
Route::get('{country}', 'HomeController@paquetesByCountry')->name('paquetesByCountry');
Route::get('detalle-paquete/{id}-{paq_nombre}', 'HomeController@detallePaquete')->name('detallePaquete');
Route::post('cotizar-paquete-{id}', 'HomeController@detallePaquete')->name('sendNotification');
Route::post('enviar-mensaje', 'HomeController@sendMessage')->name('send-message');

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

    $route->get('/paquete', 'AdminController@showPaquete')->name('formPaquete');
    $route->post('/paquete', 'AdminController@storePaquete')->name('addPaquete');
    $route->get('/editar-paquete/{id}', 'AdminController@edit')->name('formEditPaquete');
    $route->put('/{id}/editar', 'AdminController@update')->name('editPaquete');
    $route->put('/cambiar-estado-paquete/{id}', 'AdminController@update')->name('changeStatusPaquete');

    // Imagen
    $route->get('imagenes/{id}', 'ImagenController@show')->name('showImages');
    $route->post('insertar-imagen', 'ImagenController@store')->name('addImagen');
    $route->put('/cambiar-estado-imagen/{id}', 'ImagenController@update')->name('changeStatusImagen');
    $route->delete('/eliminar-imagen/{id}', 'ImagenController@destroy')->name('deleteImagen');

    $route->get('categoria', 'CategoriaController@index')->name('categoria');

    $route->get('logout', 'Auth\AuthController@getLogout')->name('salir');
});
