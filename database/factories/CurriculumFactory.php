<?php

use App\Models\Curriculum;
use Faker\Generator as Faker;

$factory->define(Curriculum::class, function (Faker $faker) {
    return [
        'subject' => $faker->catchPhrase,
        'year_level' => '1st year',
        'course' => 'BSIT',
        'units' => rand(1, 3)
    ];
});
