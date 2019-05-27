<?php

namespace App\Http\Controllers;

use Auth;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function postIndex()
    {
        //dd($_POST);
        $obj= new Product;
        $obj->name=$_POST['name'];
        $obj->body=$_POST['body'];
        $obj->sales=$_POST['sales'];
        $obj->price=$_POST['price'];
        $obj->user_id=(isset(auth::user()->id))?Auth::user()->id:0;
        $obj->status='new';
        $obj->catalog_id=0;
        $obj->picture='';
        $obj->save();
        return redirect()->back();
    }
}
