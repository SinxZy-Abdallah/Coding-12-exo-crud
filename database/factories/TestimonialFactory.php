<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\testimonial;

$factory->define(Testimonial::class, function (Faker $faker) {
    $cate = [
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
    return [
        'img_profil'=> $faker->imageUrl(500, 500, $faker->randomElement($cate)),
        'commentaire'=> $faker->text(),
        'name'=> $faker->name(),
        'description'=> $faker->text(),

    ];
});
