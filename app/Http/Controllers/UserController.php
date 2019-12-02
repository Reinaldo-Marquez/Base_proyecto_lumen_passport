<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function show(){
        $users = User::all();
        return $users;
    }

    public function getById($id){
        $user = User::find($id);
        return $user;        
    }
}
