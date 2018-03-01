<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'count' => rand(1,3),
		'price' => rand(300,550),
    ];
});
