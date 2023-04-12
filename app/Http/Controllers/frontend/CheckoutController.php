<?php

namespace App\Http\Controllers\frontend;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class CheckoutController extends Controller
{
    //
    public function index(){
        $cartitems=Cart::where('user_id',Auth::id())->get();
        return view('frontend.checkout',compact('cartitems'));
    }

    public function placeorder(Request $request ){
        $order=new Order();
        $order->user_id=Auth::id();
        $order->fname =$request->input('fname');
        $order->lname =$request->input('lname');
        $order->phone =$request->input('phone');
        $order->email =$request->input('email');
        $order->address =$request->input('address');
        $order->city =$request->input('city');
        $order->state =$request->input('state');
        $order->country=$request->input('country');
        $order->zipcode=$request->input('zipcode');
        //calculate total price
        $total=0;
        $cartitems_total=Cart::where('user_id',Auth::id())->get();
        foreach($cartitems_total as $prod){
            $total += $prod->products->selling_price;
        }
        $order->total_price = $total;

        $order->tracking_no='kaido'.rand(1111,9999);
        $order->save();
        
        $cartitems=Cart::where('user_id',Auth::id())->get();
        foreach($cartitems as $item){
            OrderItem::create([
                'order_id'=>$item->id,
                'prod_id'=>$item->prod_id,
                'quantity'=>$item->prod_qty,
                'price'=>$item->products->selling_price
            ]);
            $prod =Product::where('id',$item->prod_id)->first();
            $prod->quantity = $prod->quantity - $item->prod_qty;
            $prod->update();
        }

     
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
            $user->tracking_no='kaido'.rand(1111,9999);
            $user->update();
        }
        $cartitems=Cart::where('user_id',Auth::id())->get();
        Cart::destroy($cartitems);
        return redirect('/')->with('status','order placed succesfully');
    }
    
}