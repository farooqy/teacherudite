<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    //
    protected $table = "users";
    protected $fillable = [
        "name", "email", "token", "remember_token",
        "password",
    ];
    
}
