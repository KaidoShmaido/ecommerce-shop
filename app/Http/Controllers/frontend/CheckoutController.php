<?php

namespace App\Http\Controllers\frontend;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    //
    public function index(){
        $cartitems=Cart::where('user_id',Auth::id())->get();
        return view('frontend.checkout',compact('cartitems'));
    }

    public function placeorder(Request $request ){
        
        $order = new Order();
        $order->fname =$request->input('fname');
        $order->lname =$request->input('lname');
        $order->email =$request->input('email');
        $order->phone =$request->input('phone');
        $order->address =$request->input('address');
        $order->city =$request->input('city');
        $order->state =$request->input('state');
        $order->country=$request->input('country');
        $order->zipcode=$request->input('zipcode');
        
        $order->tracking_no='track'.rand(1111,9999);
        $order->save();

        $cartitems=Cart::where('user_id',Auth::id())->get();
        foreach($cartitems as $item){
            OrderItem::create([
                'order_id'=>$order->id,
                'prod_id'=>$item->prod_id,
                'quantity'=>$item->prod_qty,
                'price'=>$item->products->selling_price
            ]);
        }

        $prod =Product::where('id',$item->prod_id)->first();
        $prod->quantity = $prod->quantity-$item->prod_qty;
        if(Auth::user()->address==NULL){
            $user=User::where('id',Auth::id())->first();
            $user->fname =$request->input('fname');
            $user->lname =$request->input('lname');
            $user->phone =$request->input('phone');
            $user->address =$request->input('address');
            $user->city =$request->input('city');
            $user->state =$request->input('state');
            $user->country=$request->input('country');
            $user->zipcode=$request->input('zipcode');
            $user->update();
        }
    }
    
}