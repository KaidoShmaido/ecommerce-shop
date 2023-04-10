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
                return response()->json(['status'=>' added to the whislist']);



            }
            else{
                return response()->json(['status'=>$prod_check->name.'Already added to the whislist']);
            }
        }
        else{
            return response()->json(["status"=>'login to Continue']);
        }
    }
}
