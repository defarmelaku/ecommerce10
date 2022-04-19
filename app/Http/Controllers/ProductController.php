<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    function register(){
        return view('product.register');
    }
    public function store(Request $request){
        $product=new product();
        $product->name=$request->name;
        $product->unit=$request->unit;
        $product->price=$request->registerprice;
        $product->quantity=$request->quantity;
        $is_successed=$product::Save();
        if($is_successed)
       { echo'record is successed';
    }
        else
            echo 'record is not successed try again';
            
        

    }
}
