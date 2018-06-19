<?php

use App\Models\Curriculum;
use App\Models\Schedule;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factory(Curriculum::class,5)->create();
        factory(Schedule::class,5)->create();
    	factory(Student::class,5)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
