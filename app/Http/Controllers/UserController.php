<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAll(){
        $users=User::paginate(20);
        return view ('users',compact('users'));
    }
    public function getOne($id=null){
        $obj=User::find($id);
        //dd($obj);
        return view ('user',compact('obj'));
    }
}
