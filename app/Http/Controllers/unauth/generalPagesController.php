<?php

namespace App\Http\Controllers\unauth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\customClass\CustomRequestValidator;
use App\customClass\Error;
use App\models\userModel;
use \Hash;
use Illuminate\Http\Response;
class generalPagesController extends Controller
{
    //

    public function __construct()
    {
        $this->Status = new Error();
        $this->CustomValidator = new CustomRequestValidator();
    }

    public function getAdminLoginPage()
    {
        return view('admin.auth.login');
    }

    public function RegisterUser(Request $request)
    {
        $rules = [
            "name" => "required|string|max:45",
            "email" => "required|email|max:75|unique:userModel,email",
            "password" => "required|confirmed|min:4|max:45"
        ];
        $is_valid = Validator::make($request->all(), $rules,[]);
        $isNotValidRequest = $this->CustomValidator->isNotValidRequest($is_valid);
        if($isNotValidRequest)
            return $isNotValidRequest;
        
        userModel::create([
            "token" => hash('md5', time()),
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),

        ]);
        
        $this->Status->setSuccess(['success']);
        return  $this->Status->getSuccess();
        

    }
    public function LoginUser(Request $request)
    {
        $rules = [
            "email" => "required|email|max:75",
            "password" => "required|string|min:4|max:45"
        ];
        $is_valid = Validator::make($request->all(), $rules,[]);
        $isNotValidRequest = $this->CustomValidator->isNotValidRequest($is_valid);
        if($isNotValidRequest)
            return $isNotValidRequest;
        
        $user = userModel::where('email', $request->email)->get();
        if($user == null || $user->count() <=0)
        {
            $this->Status->setError(['User email and password do not match']);
            return $this->Status->getError();
        }
        else if($user->count() > 1)
        {
            $this->Status->setError(['User email has conflict with other users']);
            return $this->Status->getError();
        }
        else if(!Hash::check($request->password, $user[0]->password))
        {
            $this->Status->setError(['User credentials do not match']);
            return $this->Status->getError();
        }

        $this->Status->setSuccess(['success']);
        $success = $this->Status->getSuccess();
        $ttl = 24*60*30;
        $response  = response($success)->cookie('is_admin', true, $ttl)->cookie('admin_id', $user[0]->id, $ttl);
        return $response;

    }
}
