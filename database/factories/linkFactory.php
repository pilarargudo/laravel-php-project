<?php

use Faker\Generator as Faker;

$factory->define(App\link::class, function (Faker $faker) {
    return [
        // creamos los campos que queremos que cree por dupla
        'title'=>substr($faker->sentence(2), 0 , -1),
        'url'=>$faker->url,
        'description'=>$faker->paragraph
    ];
});
