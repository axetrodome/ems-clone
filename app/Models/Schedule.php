<?php

namespace App\Models;

class Schedule extends Model
{
    //
    public function students()
    {
    	return $this->belongsToMany(Student::class);
    }
    
    public function curriculum()
    {
    	return $this->belongsTo(Curriculum::class);
    }

    public function users()
    {
        //define foreign
    	return $this->belongsTo(User::class, 'professor_id');
    }

}
