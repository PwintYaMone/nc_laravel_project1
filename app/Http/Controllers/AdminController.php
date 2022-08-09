<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('auth.adminlogin');
    }
    public function dashboard()
    {

        
        return view('admin.index');
    }
}
