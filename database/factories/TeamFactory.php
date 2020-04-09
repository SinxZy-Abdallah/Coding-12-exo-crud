<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {

    $cate = [
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
        
    return [
        'img_team'=> $faker->imageUrl(500, 500, $faker->randomElement($cate)),
        'name'=> $faker->name(),
        'description'=> $faker->sentence(),
    ];
});
