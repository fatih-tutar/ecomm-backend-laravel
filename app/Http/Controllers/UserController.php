<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    function register(Request $req){
        $user = new User;
        $user->name = $req->input('name'); 
        $user->email = $req->input('email'); 
        $user->password =Hash::make($req->input('password')); 
        $user->save();
        return $user;
    }
}
