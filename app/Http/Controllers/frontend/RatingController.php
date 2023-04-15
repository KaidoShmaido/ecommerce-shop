<?php

namespace App\Http\Controllers\frontend;

use App\Models\Rating;
use App\Models\Product;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class RatingController extends Controller
{
    public function add(Request $request){
        $stars_rated =$request ->input('product_rating');
        $product_id =$request->input('product_id');

        $product_check = Product::where('id',$product_id)->where('status','0')->first();

        if($product_check){
            $verified_purchase =Order::where('orders.user_id',Auth::id())
            ->join('order_items','orders.id','order_items.order_id')
            ->where('order_items.prod_id',$product_id)->get();


            if($verified_purchase)
            {
                $existing_rating=Rating::where('user_id',Auth::id())->where('prod_id',$product_id)->first();
                if($existing_rating)
                {
                         $existing_rating->stars_rated=$stars_rated;
                         $existing_rating->update();
                }       
               
            else
               {
                Rating::create([
                    'user_id'=>Auth::id(),
                    'prod_id'=>$product_id,
                    'stars_rated'=>$stars_rated


                ]);
               }
               return redirect()->back()->with('status','Thanks for rating this products');

            }
            else
            {
                return redirect()->back()->with('status','you cannot rate a product without purchase');
            }
        }

        else
        {
            return redirect()->back()->with('status','The link you followed is broken');

        }

    }
}
