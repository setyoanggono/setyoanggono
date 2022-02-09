<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        $data['title'] = 'Home';

        return view('home', $data);
    }

    public function akun()
    {
        $data['title'] = 'Account';
        $data['user'] = User::get();

        return view('akun', $data);
    }

    public function approvement()
    {
        $data['title'] = 'Approvement';

        return view('approvement', $data);
    }

    public function request()
    {
        $data ['title'] = 'Request Order';

        return view('request', $data);
    }

    
    public function payment()
    {
        $data ['title'] = 'Payment';

        return view('payment', $data);
    }

    public function report()
    {
        $data['title'] = 'Report';

        return view('report', $data);
    }

    public function mitra()
    {
        $data['title'] = 'Report Mitra';
        
        return view('mitra', $data);
    }

    public function customer()
    {
        $data['title'] = 'Report Customer';
        
        return view('customer', $data);
    }

    public function setting()
    {
        $data['title'] = 'Setting';

        return view('setting', $data);
    }

    
    public function role()
    {
        $data ['title'] = 'Role User';

        return view('role', $data);
    }

    
    public function akses()
    {
        $data ['title'] = 'Setting User';

        return view('akses', $data);
    }

    public function logout()
    {
        $data['title'] = 'Logout';

        return view('loguot', $data);
    }

    public function create()
    {
        $data['title'] = 'Create';

        return view('create', $data);
    }
}
