<?php

use Faker\Generator as Faker;


$factory->define(App\ApiTest::class, function (Faker $faker) {
    return [
        'name' => $faker->text(50),        
        'body' => $faker->text(300)       
    ];
});

