<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Paquete::class, function (Faker\Generator $faker) {
	return [
		'paq_nombre' => $faker->state . ' ' . $faker->secondaryAddress,
		'paq_titulo' => $faker->sentence(6, true),
		'paq_precio' => $faker->randomFloat(NULL, 60, 2000),
		'paq_descripcion' => $faker->realText($maxNbChars = 400, $indexSize = 3),
		'paq_imagen_principal' => $faker->imageUrl(400, 250, 'city'),
		'paq_pais' => $faker->numberBetween(1, 32)
	];
});