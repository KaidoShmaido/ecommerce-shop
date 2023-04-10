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



<div class="container my-5">
    <div class="card shadow ">
        <div class="card-body">
            @if ($wishlist->count()>0)
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
                        <h6>In Stock</h6>
                    @else   
                        <h6>Out of Stock</h6>
                    @endif
                
                </div>
                <div class="col-md-2 my-auto">
                    <div class="btn btn-danger">
                        <i class="fa fa-trash">Remove</i>
                    </div>
                </div>
          </div>
            @else
                <h4>There are no products in your Wishlist <i class="fa fa-heart"></i></h4>
            @endif
        </div>
    </div>
</div>
@endsection