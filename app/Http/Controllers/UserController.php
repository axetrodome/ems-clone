<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function change_password()
    {
        $this->validate(request(), [
            'password' => 'required|confirmed',
        ]);

        if(!Hash::check(request('old_password'), my()->password)) {
            return response(["error password didn't match"],422);
        }

        my()->update([
            'password' => Hash::make(request('password')),
        ]);

        return my(); 
    }

}
