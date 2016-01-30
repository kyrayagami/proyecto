<?php

use Faker\Generator;	
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
$factory->define(App\Productor::class, function(Generator $faker){
	$array = [
		'nombre' => $faker->name,
        'correo' => $faker->email,
        'perfil' => $faker->text,
        'imagen_url' => $faker->url,
        'estatus' => 'ACTIVO'
	];
	return $array;
});

$factory->define(App\Conductor::class, function(Generator $faker){
	$array = [
		'nombre' => $faker->name,
        'correo' => $faker->email,
        'perfil' => $faker->text,
        'imagen_url' => $faker->url,
        'estatus' => 'ACTIVO'
	];
	return $array;
});