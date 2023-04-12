<?php

namespace App\Http\Controllers\frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderItems;

class UserController extends Controller
{
    //
    public function index(){
        $orders =Order::where('user_id',Auth::id())->get();
        return view('frontend.orders.index',compact('orders'));
    }

    public function view($id){
        $orders =Order::where('id',$id)->where('user_id',Auth::id())->first();
        return view('frontend.orders.view',compact('orders'));
    }
}
