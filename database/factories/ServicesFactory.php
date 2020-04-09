<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\services;

$factory->define(services::class, function (Faker $faker) {
    $cate = [
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];

    return [
        'titre'=> $faker->name(),
        'description'=> $faker->sentence(),
        'logo'=> $faker->imageUrl(80, 80, $faker->randomElement($cate)),
    ];
});
