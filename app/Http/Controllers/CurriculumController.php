<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curriculum;

class CurriculumController extends Controller
{
    //
    public function index()
    {
    	return Curriculum::latest()->get();
    }
}
