<?php
namespace App\Models;


class Curriculum extends Model
{
    //
    public function schedules()
    {
    	return $this->hasMany(Schedule::class);
    }

}
