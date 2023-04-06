@extends('layouts.front')

@section('title')
Welcome the Maxim Shop
@endsection
<style>
img{
    width: 70%;
    padding: 30px;
    display: flex;
    padding: 30px;
    overflow: hidden;
    margin-bottom: 20px;
    justify-content:center;
}

.card{
    height: 90%
}
</style>
@section('content')
    @include('layouts.inc.slider')
   <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Featured Products</h2>
                    @foreach ($featured_products as $product)
                    <div class="col-md-3">
                        <div class="item">
                            <div class="card mb-3" >
                                <img class="mx-auto d-block" src="{{asset('assets/uploads/products/'.$product->image)}}" alt="" height="200px" width="230px">
                                    <div class="card-body">
                                        <h5>{{$product->name}}</h5>
                                        <span class="float-start">{{$product->selling_price}}$</span>
                                        <span class="float-end"><s>{{$product->original_price}}</s>$</span>
                                        <a href="#">Add To Cart</a>
                                    </div>
                            </div>
                        </div>
                    </div>

                    
                    @endforeach

                                            
                </div>
            </div>
        </div>
   </div>



   <div class="py-5">
    <div class="container">
        <div class="row">
            <h2>Trending Categories</h2>
            
                @foreach ($trending_category as $trend)
                <div class="col-md-3">
                    <div class="item">
                        <div class="card mb-3">
                            <img src="{{asset('assets/uploads/category/'.$trend->image)}}" alt="" height="200px" width="230px">
                                <div class="card-body">
                                    <h5>{{$trend->name}}</h5>
                                    <p>
                                        {{$trend->description}}
                                    </p>

                                </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

@section("scripts")
<script>

</script>

@endsection

