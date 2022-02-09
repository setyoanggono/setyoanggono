<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Alert;
use File;


class UserController extends Controller
{
    public function store(Request $request)
    {
        $email  =   strtolower($request->email);
        $image  =   $request->file('image');
        $this->validate($request, [
        
            'name'          => 'required|max:255|regex:/^[a-zA-Z ]*$/',
            'phone'         => 'required|digits_between:10,13|unique:users,phone',
            'email'         => 'required|email|unique:users,email',
            'password'      => 'required',
            'image'         => 'required|max:1024',
            'image.*'       => 'mimes:jpg,jpeg,png',
    
        ]);

        $image_name     =   'image-' . uniqid() .'.'. $image->getClientOriginalExtension();
        $image->move(public_path('/uploads/user'), $image_name); 

        $user                   =   new User;
        $user->name             =   ucwords(strtolower($request->name));
        $user->role             =   $request->role;
        $user->phone            =   $request->phone;
        $user->email            =   $email;
        $user->password         =   Hash::make($request->password);
        $user->image            =   $image_name;
        $user->save();

        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return redirect()->route('akun');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        File::delete('uploads/user/' . $user->image);
        $user->delete();

        return redirect()->route('akun');
    }

    public function show($id)
    {
        $data['title']      =  'Edit User';
        $data['data']   = User::findOrFail($id);
        return view('edit', $data);        
    }

    public function update($id, Request $request)
    {
        $check  =   User::findOrFail($id);
        $email  =   strtolower($request->email);
        $image  =   $request->file('image');
        $this->validate($request, [
            'name'          => 'required|max:255|regex:/^[a-zA-Z ]*$/',
            'phone'         => 'required|digits_between:10,13|unique:users,phone,' . $id,
            'email'         => 'required|email|unique:users,email,' . $id,
            'image.*'       => 'mimes:jpg,jpeg,png',
    
        ]);

        $image_name    = $check->image;

        if($image != '') {
            File::delete('uploads/user/' . $check->image);
            $image_name =   'image-' . uniqid() . '.'. $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/user'), $image_name);
        }

        $check->name        =   ucwords(strtolower($request->name));
        $check->role        =   $request->role;
        $check->phone       =   $request->phone;
        $check->email       =   $email;
        $check->image       =   $image_name;
        $check->save();
        Alert::success('Congrats', 'You\'ve Successfully Updated');
        return redirect()->route('akun');
    }

    public function detail($id)
    {
        $data['title']      =  'Detail';
        $data['data']       = User::findOrFail($id);
        return view('detail', $data); 
    }   
   
}
