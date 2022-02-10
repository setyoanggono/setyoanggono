<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\hash;
use Validator;
use Auth;
use Alert;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        $data['title']  = 'login';

        return view('login', $data);
    }

    public function postlogin(Request $request)
    {
        $email      = strtolower($request->email);
        $password   = $request->password;

        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required',
        ],
        [
            'email.required'       => 'Email Cannot Be Empty',
            'email.email'          => 'Wrong Email',
            'password.required'    => 'Password Cannot Be Empty',
        ]);
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user   = Auth::getLastAttempted();

            Alert::success('Success', 'Login Success');
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('Wrong Password')->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function register()
    {
        $data['title']      ='register';
        return view('register', $data);
    }

    public function new(Request $request)
    {
        $email  =   strtolower($request->email);

        $this->validate($request, [
            'name'          => 'required|max:255|regex:/^[a-zA-Z ]*$/',
            'phone'         => 'required|digits_between:10,13|unique:users,phone',
            'email'         => 'required|email|unique:users,email',
            'password'      => 'required',
    
        ]);

        $user                   =   new User;
        $user->name             =   ucwords(strtolower($request->name));
        $user->role             =   'admin';
        $user->phone            =   $request->phone;
        $user->email            =   $email;
        $user->password         =   Hash::make($request->password);
        $user->save();

        Alert::success('Success', 'You\'ve Successfully Registered');
        return redirect()->route('login');
    }
}
