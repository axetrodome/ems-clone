<?php

namespace App\Models;


class Student extends Model
{
    //
	public function schedules()
	{
		return $this->belongsToMany(Schedule::class);
	}

}
