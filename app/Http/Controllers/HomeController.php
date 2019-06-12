<?php

namespace App\Http\Controllers;

use App\User;

use Auth;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

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

   /* public function postIndex()
    {
        $pic=\App::make('App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);
        if(!$pic)
        {
            $pic ='';
        }

        //dd($_FILES);
        //dd($_POST);
        $obj= new Product;
        $obj->name=$_POST['name'];
        $obj->body=$_POST['body'];
        $obj->sales=$_POST['sales'];
        $obj->price=$_POST['price'];
        $obj->user_id=(isset(auth::user()->id))?Auth::user()->id:0;
        $obj->catalog_id=0;
        $obj->picture=$pic;
        $obj->status='new';
        $obj->save();
        return redirect()->back();

    }*/
    public function postindex(ProductRequest $r)
    {
        $pic = \App::make('App\Libs\Imag')->URL($_FILES['picture1']['tmp_name']);
        if (!$pic) {
            $r['picture'] = '';
        }
        else {
            $r['picture'] = $pic;
        }

        $r['user_id'] = (isset(Auth::user()->id))?Auth::user()->id:0;
        //$r['picture'] = '';
        $r['status'] = 'new';
        $r['catalog_id'] = 2;
        unset($r['_token']);
        //dd($r->All());
        Product::create($r->All());
        return redirect()->back();
    }
    public function getAdmin(){
        $users= User::all();
        return response()->json($users);
    }
}
