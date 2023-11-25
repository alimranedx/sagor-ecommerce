<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminRegisterController extends Controller
{

    public function register()
    {
        return view('admin.register');
    }
    public function login()
    {
        return view('admin.login');
    }
}
