<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class photoController extends Controller
{
    public function  photo()
    {

//        $user = new User();
//        $user->name = 'okok';
//        $user->email='aaa@hotmail.com';
//        $user->password=bcrypt(99989);
//        $user->save();

        $user = User::find(1);

        dd($user->toArray());
    }
}



