<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
	
    return [
        'first_name' => $faker->firstName,
		'last_name' => $faker->lastName,
		'pesel' => $faker->pesel,
		'birth' => $faker->dateTimeThisCentury(strtotime('23 years ago'))->format('Y-m-d'),
		'album' => rand(10000, 99999),
    ];
    
});
