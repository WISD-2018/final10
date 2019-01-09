<?php

use Faker\Generator as Faker;

$factory->define(App\Message::class, function (Faker $faker) {
    return [
        'art_id'=> 0,
        'stu_id'=> 0,
        'content'=> $faker->paragraphs(mt_rand(3, 6),true),
    ];
});
