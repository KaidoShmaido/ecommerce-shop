<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //
    public function index(){
        $wishlist=Wishlist::where('user_id',Auth::id())->get();
        return view('frontend.wishlist',compact('wishlist'));
    }

    public function add(Request $request){
        if(Auth::check())
        {
            $prod_id = $request ->input('product_id');
            if(Product::find($prod_id))
            {
                $wish= new Wishlist();
                $wish->prod_id=$prod_id;
                $wish->user_id=Auth::id();
                $wish->save();
                return response()->json(['status'=>'Product added to the whislist']);



            }
            else{
                return response()->json(['status'=>' Product Already added to the whislist']);
            }
        }
        else{
            return response()->json(["status"=>'login to Continue']);
        }
    }

    public function  delete_item(Request $request){
        if(Auth::check())
                {

                    $prod_id = $request->input('prod_id');
                    if(Wishlist::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists())
                    {
                        $wish=Wishlist::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
                        $wish->delete();
                        return response()->json(['status'=>'item removed from wishlist']);

                    }
                  
                }
                else{
                    return response()->json(['status'=>"login to continue"]);

                }
    }


    public function wishlistCount(){
        $wishcount= Wishlist::where('user_id',Auth::id())->count();
        return response()->json(['count'=>$wishcount]);
    }
}
