<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class adminController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('adminAuth');
    }

    public function getAdminIndexPage()
    {
        return view('admin.layout.main');
    }
    public function getAdminRegisterPage()
    {
        return view('admin.auth.register');
    }

    // public 
    
}
