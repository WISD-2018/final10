<?php

use Faker\Generator as Faker;

$factory->define(App\Restaurant::class, function (Faker $faker) {

    $num2='img/restaurant/';
    $num=mt_rand(1,20);
    $num3='.jpg';
    return [
        'name'=> $faker->company,
        'photo'=>$num2.$num.$num3,
//         photo=>$faker->imageUrl($width = 640, $height = 480, 'nature')
        'created_at' => $faker->dateTimeBetween('-1 month', '+1 days'),
    ];
});
