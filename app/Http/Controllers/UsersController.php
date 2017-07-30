<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function postSignUp(Request $request)
    {
        // Validate the user registration form
        $this->validate($request, [
            'first_name' => 'required|max:120',
            'last_name'  => 'required|max:120',
            'email'      => 'required|email|unique:users',
            'username'   => 'required|max:20|min:4|unique:users',
            'password'   => 'required|min:4|max:12'
        ]);

        $firstName = $request['firstName'];
        $lastName  = $request['lastName'];
        $email     = $request['email'];
        $username  = $request['username'];
        $fBRef     = $request['facebook'];
        $password  = bcrypt($request['password']);

        $user = new User();
        $user->first_name   = $firstName;
        $user->last_name    = $lastName;
        $user->email        = $email;
        $user->username     = $username;
        $user->fb_reference = $fBRef;
        $user->password     = $password;

        if ($user->save()) {
            return view('users.home');
        }
    }

    public function postSignIn(Request $request)
    {
        $adminRole = config('studio.User.Role.Admin');

        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']])) {
            $user = Auth::user();

            if ($user->role == $adminRole) {
                return view('admin.home');
            }
            return view('users.home');
        }
        return view('users.home');
    }

    public function getSignOut()
    {
        Auth::logout();
        return view('users.home');
    }
}