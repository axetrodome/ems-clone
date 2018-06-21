<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function profile()
    {
    	return view('users.profile');
    }

    public function show()
    {
    	return my();
    }

    public function update()
    {

        //validation

    	my()->update([
            'name' => request('name'),
    		'email' => request('email')
    	]);
        return my(); 
    }

}
