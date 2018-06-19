<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
	public function construct()
	{
		
	}

    public function index()
    {
    	return view('admin.dashboard');
    }
}
