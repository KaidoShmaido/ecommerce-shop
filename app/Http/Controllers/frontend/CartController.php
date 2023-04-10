<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\CartController;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{




    public function viewCart(){
        $cartItems =Cart::where('user_id',Auth::id())->get();
        return view("frontend.cart",compact('cartItems'));
    }


    public function add_product(Request $request){
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');
            if(Auth::check()){
                $prod_check=Product::where('id',$product_id)->first();

                if($prod_check)
                {
                    if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists()){
                        return response()->json(['status'=>$prod_check->name." Already added to the cart"]);
                    }
                    else
                    {
                        
                        $cartItem =new Cart();
                        $cartItem->prod_id=$product_id;
                        $cartItem->user_id=Auth::id();
                        $cartItem->prod_qty=$product_qty;
                        $cartItem->save();
                        return response()->json(['status'=>$prod_check->name." Added to the cart"]);
                    }
                    

                }
            
            else{
                return response()->json(['status'=>"login to continue"]);
            }
    }

   
}

            public function deleteProduct(Request $request){
                if(Auth::check())
                {

                    $prod_id = $request->input('prod_id');
                    if(Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists())
                    {
                        $cartItem=Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
                        $cartItem->delete();
                        return response()->json(['status'=>'Product has been deleted succesfully']);

                    }
                  
                }
                else{
                    return response()->json(['status'=>"login to continue"]);

                }
            }

            public function updatecart(Request $request){
                $prod_id=$request->input('prod_id');
                $product_qty=$request->input('prod_qty');

                if(Auth::check()){
                    if(Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists()){
                        $cart=Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
                        $cart->prod_qty = $product_qty;
                        $cart->update();
                        return response()->json(['status'=>"Quantity updated"]);
                    }

                }

            }
            public function cartcount(){

                $cartcount= Cart::where('user_id',Auth::id())->count();
                return response()->json(['count'=>$cartcount]);
            }
}