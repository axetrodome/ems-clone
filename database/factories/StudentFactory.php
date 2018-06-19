<?php

use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'student_number' => '1011-015-016',
        'year' => '1st year',
        'course' => 'BSIT',
    ];
});
