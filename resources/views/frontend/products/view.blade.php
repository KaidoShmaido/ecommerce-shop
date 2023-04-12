<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="path/to/your/jquery_file.js"><\/script>')</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

@extends('layouts.front')
@section('title',$products->name)
@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{url('add-rating')}}" method="POST">
            @csrf
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Rate {{$products->name}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
                <div class="modal-body">
                    <div class="rating-css">
                        <div class="star-icon">
                            <input type="radio" value="1" name="product_rating" checked id="rating1">
                            <label for="rating1" class="fa fa-star"></label>
                            <input type="radio" value="2" name="product_rating" id="rating2">
                            <label for="rating2" class="fa fa-star"></label>
                            <input type="radio" value="3" name="product_rating" id="rating3">
                            <label for="rating3" class="fa fa-star"></label>
                            <input type="radio" value="4" name="product_rating" id="rating4">
                            <label for="rating4" class="fa fa-star"></label>
                            <input type="radio" value="5" name="product_rating" id="rating5">
                            <label for="rating5" class="fa fa-star"></label>
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
       </form>
      </div>
    </div>
  </div>





<meta name="csrf-token" content="{{ csrf_token() }}">

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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Rate this product
                        </button>
                        
                    </div>
                </div>
              </div>
            </div>
        
@endsection



