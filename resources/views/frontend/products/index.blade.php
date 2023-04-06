@extends('layouts.front')

@section('title')
    {{$category->name}}
@endsection


@section('content')
<div class="py-3 mb-4 shadow-sm bg-info   border-top">
    <div class="container">
        <h6 class="mb-8">Collection / {{$category->name}} </h6>
    </div>
</div>
   <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>{{$category->name}}</h2>
                    @foreach ($products as $product)
                        <div class="col-md-3 mb-3">
                            <div class="item">
                                <div class="card mb-3">
                                    <a href="{{url('category/'.$category->slug.'/'.$product->slug)}}">
                                        <img src="{{asset('assets/uploads/products/'.$product->image)}}" alt="" height="200px" width="230px">
                                            <div class="card-body">
                                                <h5>{{$product->name}}</h5>
                                                <span class="float-start">{{$product->selling_price}}$</span>
                                                <span class="float-end"><s>{{$product->original_price}}</s>$</span>

                                            </div>
                                    </a>
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
    $(document).ready(function()){
        $('.plus-btn').click(function(e)){
            e.preventDefault();;
            var increment_value = $('.')
        }
    }
</script>

@endsection

