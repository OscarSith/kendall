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

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin'], function ($route) {
    $route->get('/', 'AdminController@index')->name('dashboard');

    $route->get('/pais/paquete/{country}/{country_id}', 'AdminController@showPaquete')->name('formPaquete');
    $route->post('/pais/add-paquete', 'AdminController@storePaquete')->name('addPaquete');
    $route->get('/pais/{country}/{country_id}/editar-paquete/{id}', 'AdminController@edit')->name('formEditPaquete');
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

    // Promociones
    $route->get('promociones', 'AdminController@promo')->name('promociones');
    $route->delete('delete-promo/{id}', 'AdminController@deletePromo')->name('deletePackagePromo');

    // FLyers
    $route->get('circuitos', 'CirtuitoController@index')->name('circuitos');
    $route->post('circuito', 'CirtuitoController@store')->name('circuito');
    $route->post('remove-flyer/{id}', 'CirtuitoController@destroy')->name('remove-flyer');

    // Newsletters
    $route->get('newsletters', 'AdminController@newsletters')->name('newsletters');
    $route->get('export-newsletters', 'AdminController@exportNewsletters')->name('exportNewsletters');
});

Route::group(['middleware' => 'web'], function ($route) {
    $route->get('/login', 'Auth\AuthController@showLoginForm');
    $route->post('login', 'Auth\AuthController@login');

    $route->get('/', 'HomeController@index');
    $route->get('contacto', 'HomeController@contacto');
    $route->get('nosotros', 'HomeController@nosotros');
    $route->get('circuitos', 'HomeController@circuitos');
    $route->get('ofertas', 'HomeController@ofertas');
    $route->get('libroreclamaciones', 'HomeController@libro');
    // Libro Reclamaciones
    $route->post('libroreclamaciones/agregar', 'HomeController@addLibroReclamacion')->name('agregarReclamacion');

    $route->get('{country}', 'HomeController@paquetesByCountry')->name('paquetesByCountry');
    $route->get('paises/{categoria}', 'HomeController@countriesByCategoria')->name('countriesByCategoria');
    $route->get('detalle-paquete/{id}-{paq_nombre}', 'HomeController@detallePaquete')->name('detallePaquete');
    $route->post('cotizar-paquete-{id}', 'HomeController@sendNotificacion')->name('sendNotification');
    $route->post('enviar-mensaje', 'HomeController@sendMessage')->name('send-message');
    $route->post('newsletter', 'HomeController@newsletter');
});
