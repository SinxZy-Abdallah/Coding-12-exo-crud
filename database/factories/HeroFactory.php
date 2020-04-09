<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\hero;
use Faker\Generator as Faker;

$factory->define(hero::class, function (Faker $faker) {
    return [
        'titre' => $faker->name(),
        'mini_titre' => $faker->sentence(),
        
    ];
});
