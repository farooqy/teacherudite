<?php

namespace App\Http\Controllers\jobs;

use App\Http\Controllers\Controller;
use App\models\userModel;
use Illuminate\Http\Request;

class MainJobsController extends Controller
{
    //
    public $user;
    public function __construct()
    {
        $this->middleware('adminAuth');
        $this->user = userModel::where("id", $_COOKIE["admin_id"])->get();
    }

    public function newJobsView()
    {
        $user = $this->user;
        return view('admin.comingsoon.comingsoon', compact('user',$user));
    }
    public function listActiveJobsView()
    {
        $user = $this->user;
        return view('admin.comingsoon.comingsoon', compact('user',$user));
    }
    public function listDisabledJobsView()
    {
        $user = $this->user;
        return view('admin.comingsoon.comingsoon', compact('user',$user));
    }
}
