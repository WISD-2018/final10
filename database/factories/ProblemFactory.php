<?php

use Faker\Generator as Faker;

$factory->define(App\Problem::class, function (Faker $faker) {
    return [
        'stu_id'=> 0,
        'title'=> $faker->sentence(mt_rand(3, 10)),
        'content' => $faker->paragraphs(mt_rand(3, 6),true),
        'created_at' => $faker->dateTimeBetween('-1 month', '+1 days'),
    ];
});
