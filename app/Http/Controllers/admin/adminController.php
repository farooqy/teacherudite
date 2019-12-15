<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\userModel;

class adminController extends Controller
{
    //
    public $user;
    public function __construct()
    {
        $this->middleware('adminAuth');
        $this->user = userModel::where("id", $_COOKIE["admin_id"])->get();
    }

    public function getAdminIndexPage()
    {
        $user = $this->user;
        return view('admin.index', compact('user',$user));
    }
    public function getAdminRegisterPage()
    {
        $user = $this->user;
        return view('admin.auth.register');
    }

    // public 
    
}
