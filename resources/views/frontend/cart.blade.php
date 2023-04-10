@extends('layouts.front')

@section('title')
My Cart
@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <div class="mb-8">
           <h6>
            <a href="{{url('/')}}">Home</a> /
            <a href="{{url('/cart')}}">Cart</a>
           </h6>
        </div>
    </div>
</div>



<div class="container my-5">
    <div class="card shadow ">
        @if($cartItems->count()>0)
            <div class="card-body">
                @php
                     $total = 0;
                @endphp
              @foreach ($cartItems as $item)
              <div class="row product_data">
                    <div class="col-md-2">
                        <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" alt="" height="70px" width="70px">
                    </div>
                    <div class="col-md-3 my-auto">
                        <h6 class="my-auto">{{$item->products->name}}</h6>
                    </div>
                    <div class="col-md-2 my-auto">
                        <h6 class="my-auto">{{$item->products->selling_price}}$</h6>
                    </div>
                    <div class="col-md-3 my-auto">
                        <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                        @if($item->products->quantity>= $item->prod_qty)
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3" style="width:130px;">
                                <button class="input-group-text changeQuantity decrement-btn">-</button>
                                <input type="text" name="quantity" class="form-control qty-input text-center" value="{{$item->prod_qty}}">
                                <button class="input-group-text changeQuantity increment-btn">+</button>     
                            </div>
                            @php $total +=$item->products->selling_price * $item->prod_qty; @endphp

                        @else   
                        <label style="font-size:14px" class="badge bg-danger">Out of Stock</label>

                        @endif
                    
                    </div>
                    <div class="col-md-2 my-auto">
                        <button class="btn btn-danger delete-cart-item "><i class="fa fa-trash"></i> Delete</button>
                    </div>
              </div>
               
            </div>
        @endforeach
        </div>
        <div class="card-footer">
            <h6>Total Price : {{$total}}
                <a href="{{url('/checkout')}}" class="btn btn-outline-success float-end">Proceed to Checkout </a>
            </h6>
        </div>
        @else
            <div class="card-body text-center">
                <h2>Your <i class="fa fa-shopping-cart"></i>Cart is empty</h2>
                <a href="{{url('category')}}" class="btn btn-outline-primary float-end">Continue Shopping</a>
            </div>
        @endif
    </div>
</div>
@endsection