<?php

use Faker\Generator as Faker;

$factory->define(App\Room_Student::class, function (Faker $faker) {
	
	$now = new DateTime();
	
    return [
		'student_id' => function()
		{
			return factory(\App\Student::class)->create()->id;
		},
		'room_id' => function()
		{
			return factory(\App\Room::class)->create()->id;
		},
		'kaucja' => rand(0,1),
		'kaucja_data' => now(),
		'from' => $now->format('Y-m-d'),
		'to' => $now->modify('+3 months')->format('Y-m-d'),
    ];
});
