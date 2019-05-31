<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use\App\Product;

class BaseController extends Controller
{
    public function getIndex(){
        $objs=product::orderBy('id','DESC')->paginate(8);
        return view('welcome',compact('objs'));
    }
}
