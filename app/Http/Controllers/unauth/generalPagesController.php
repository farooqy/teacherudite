<?php

namespace App\Http\Controllers\unauth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\customClass\CustomRequestValidator;
use App\customClass\Error;
use App\models\userModel;
use \Hash;
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
            "email" => "required|email|max:75:unique:userModel,email",
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
        return $this->Status->getSuccess();

    }
}
