<?php

use Faker\Generator as Faker;

$factory->define(App\Score::class, function (Faker $faker) {
    return [
        'res_id'=> 0,
        'stu_id'=> 0,
        'score'=>rand(0,5),
        'created_at' => $faker->dateTimeBetween('-1 month', '+1 days'),
    ];
});
