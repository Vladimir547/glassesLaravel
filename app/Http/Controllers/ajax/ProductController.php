<?php

namespace App\Http\Controllers\Ajax;

use App\Product;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function postIndex(){
        echo (int)$_POST['id'];
        $obj=Product::find((int)$_POST['id']);
        return view('ajax.product',compact('obj'));
        
    }
}
