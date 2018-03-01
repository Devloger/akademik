<?php

use Faker\Generator as Faker;

$factory->define(App\Alert::class, function (Faker $faker) {
	
	$issues = [
		'Problem z drzwiami',
		'Brak wody',
		'Klamka nie działa',
		'Coś z sufitem jest nie tak',
		'Lodówka się zepsuła',
		'Problemy z prądem',
		'Dziwnie coś piszczy w pokoju',
		'Coś się spaliło w pokoju',
		'Mikrofalówka nie działa',
		'Okno jest zbite',
		'Ktoś się włamał do pokoju',
	];
	
    return [
        'body' => $issues[array_rand($issues)],
        'room_id' => function()
		{
			return factory(\App\Room::class)->create()->id;
		},
        'student_id' => function()
		{
			return factory(\App\Student::class)->create()->id;
		},
    ];
});
