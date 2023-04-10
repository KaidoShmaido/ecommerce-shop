@extends('layouts.front')

@section('title')
My Wishlist
@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <div class="mb-8">
           <h6>
            <a href="{{url('/')}}">Home</a> /
            <a href="{{url('/wishlist')}}">Wishlist</a>
           </h6>
        </div>
    </div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="container my-5">
    <div class="card shadow ">
        <div class="card-body">
            @if ($wishlist->count()>0)
              @foreach ($wishlist as $item)
              <div class="row product_data">
                    <div class="col-md-2">
                        <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" alt="" height="70px" width="70px">
                    </div>
                    <div class="col-md-2 my-auto">
                        <h6 class="my-auto">{{$item->products->name}}</h6>
                    </div>
                    <div class="col-md-2 my-auto">
                        <h6 class="my-auto">{{$item->products->selling_price}}$</h6>
                    </div>
                    <div class="col-md-2 my-auto">
                        <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                        @if($item->products->quantity>= $item->prod_qty)

                        <label for="Quantity">Quantity</label>
                        <div class="input-group text-center mb-3" style="width:130px;">
                            <button class="input-group-text  decrement-btn">-</button>
                            <input type="text" name="quantity" class="form-control qty-input text-center" value="1">
                            <button class="input-group-text  increment-btn">+</button>     
                        </div>
                        @else   
                            <h6>Out Of Stock</h6>
                        @endif
                    
                    </div>
                    <div class="col-md-2 my-auto">
                        <button class="btn btn-success addToCart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                    </div>
                    <div class="col-md-2 my-auto">
                        <button class="btn btn-danger delete-wishlist-item"><i class="fa fa-trash"></i> Remove</button>
                    </div>
              </div>
               
        @endforeach
        </div>
       
            @else
                <h4>There are no products in your Wishlist <i class="fa fa-heart"></i></h4>
            @endif
        </div>
    </div>
</div>
@endsection