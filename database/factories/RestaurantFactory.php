<?php

use Faker\Generator as Faker;

$factory->define(App\Restaurant::class, function (Faker $faker) {
    return [
        'name'=> $faker->company,
//        'photo'=>'img/restaurant/1.jpg'
         'photo'=>$faker->imageUrl($width = 640, $height = 480, 'nature')
    ];
});
