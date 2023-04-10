@extends('layouts.front')
@section('title',$products->name)
@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="path/to/your/jquery_file.js"><\/script>')</script>





        <div class="py-3 mb-4 shadow-sm bg-warning   border-top">
            <div class="container">
                <h6 class="mb-8"><a href="{{url("/category")}}">Collections</a> /{{$products->category->name}} /{{$products->name}}</h6>
            </div>
        </div>
            <div class="container">
              <div class="card-shodow product_data">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 border-right">
                            <img src="{{asset('assets/uploads/products/'.$products->image)}}"  class="w-100" alt="">
                        </div>
                        <div class="col-md-8">
                               <h2 class="mb-0">
                                {{$products->name}}
                                @if ($products->trending=='1')
                                    <label style="font-size:16px" class="float-end badge bg-danger trending_tag">Trending</label>
                                @endif
                               </h2>
                               <hr>
                               <label class="me-3">Orginal Price : <s>{{$products->original_price}}$</s></label>
                               <label class="fw-bold">Selling Price : {{$products->selling_price}}$</label>
                               <p class="mt-3">
                                 {!! $products ->small_description !!}
                               </p>
                               <hr>
                               @if ($products->quantity >0)
                                   <label class="badge bg-success">In stock</label>
                                @else
                                   <label class="badge bg-danger">Out of Stock</label>
                               @endif

                               <div class="row mt-2">
                                    <div class="col-md-2">
                                        <div class="col-md-3">
                                            <input type="hidden" value="{{ $products->id }}" class="prod_id">
                                            <label for="quantity">Quantity</label>
                                                <div class="input-group text-center mb-3" style="width:130px">
                                                    <button class="input-group-text decrement-btn">-</button>
                                                    <input type="text" name="quantity " value="1" class="form-control qty-input text-center" >
                                                    <button class="input-group-text increment-btn">+</button>
                                                </div>    
                                        </div>

                                    </div>
                                    <div class="col-md-10">
                                        <br>
                                        @if ($products->quantity >0)
                                        <button type="button" class="btn btn-success me-3 addToCart float-start">add to cart  <i class="fa fa-shopping-cart"></i></button>
                                        @endif
                                        <button type="button" class="btn btn-primary me-3 addToWishlist float-start">add to Whishlist <i class="fa fa-heart"></i></button>
                                        

                                    </div>
                               </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr>
                        <h3>Description</h3>
                        <p class="mt-3">
                            {!! $products->description !!}
                        </p>
                    </div>
                </div>
              </div>
            </div>
        
@endsection



