<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function create()
    {
    	return view('students.register');
    }

    public function store()
    {
    	//validate requests

    	//register

    }

}
