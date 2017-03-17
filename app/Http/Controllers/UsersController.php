<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UsersController extends Controller
{
    public function postSignUp(Request $request)
    {
        $firstName = $request['firstName'];
        $lastName = $request['lastName'];
        $email = $request['email'];
        $username = $request['username'];
        $fBRef = $request['facebook'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->first_name = $firstName;
        $user->last_name = $lastName;
        $user->email = $email;
        $user->username = $username;
        $user->fb_reference = $fBRef;
        $user->password = $password;

        if ($user->save())
        {
            return view('welcome');
        }

    }
}