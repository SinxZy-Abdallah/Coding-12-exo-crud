<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'adress' => $faker->address(),
        'email'=> $faker->unique()->email,
        'phone'=> $faker->randomNumber(),
    ];
});
