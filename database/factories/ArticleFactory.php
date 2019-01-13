<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'res_id'=> 0,
        'stu_id'=> 0,
        'title'=> $faker->sentence(mt_rand(3, 10)),
        'content' => $faker->paragraphs(mt_rand(3, 6),true),
        'report'=> rand(0,1) ,
        'photo'=>$faker->imageUrl($width = 640, $height = 480, 'food')
    ];
});
