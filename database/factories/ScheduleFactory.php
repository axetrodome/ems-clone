<?php

use App\Models\Curriculum;
use App\Models\Schedule;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Schedule::class, function (Faker $faker) {
    return [
    	'professor_id' => factory(User::class)->create()->id,
    	'curriculum_id' => factory(Curriculum::class)->create()->id,
        'time' => '3:00 PM - 6:00 PM',
        'day' => 'MON'
    ];
});
