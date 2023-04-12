<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OrderItems;


class Rating extends Controller
{
    public function add(Request $request){
        return $stars_rated =$request ->input('product_rating');
        $product_id =request->input('product_id');
        $product_check = Product::where('id',$product_id)->where('status','0')->first();

        if($product_check){
            
        }
    }
}
