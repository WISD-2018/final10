<?php

use Faker\Generator as Faker;

$factory->define(App\Praise::class, function (Faker $faker) {
    return [
        'art_id'=> 0,
        'stu_id'=> 0,
        'praise'=> 1,
        'created_at' => $faker->dateTimeBetween('-1 month', '+1 days'),
    ];
});
