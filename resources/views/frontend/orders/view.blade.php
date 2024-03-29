@extends('layouts.front')

@section('title')
My Orders
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                        <div class="card-header bg-primary">
                            <h4 class="text-white"> Order view
                                <a href="{{url('my-orders')}}" class="btn btn-warning text-white float-end">Back</a>

                            </h4>
                        </div>
                    <div class="card-body">

                       <div class="row">
                        <div class="col-md-6 orders-details">
                            <label for="">First Name</label>
                            <div class="border p-2">{{ $orders->fname }}</div>

                            <label for="">Last Name</label>
                            <div class="border p-2">{{$orders->lname}}</div>

                            <label for="">Email</label>
                            <div class="border p-2">{{$orders->email}}</div>

                            <label for="">Contact Number</label>
                            <div class="border p-2">{{$orders->phone}}</div>

                            <label for="">Shipping Address</label>
                            <div class="border p-2">
                                {{$orders->address}},
                                {{$orders->city}},
                                {{$orders->state}},
                                {{$orders->country}}
                            </div>

                            <label for="">Zip Code </label>
                            <div class="border p-2">{{$orders->zipcode}}</div>
                        </div>
                            <div class="col-md-6">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Qunatity</th>
                                            <th> Price</th>
                                            <th>Image</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->orderitems as $item)
                                            <tr>
                                                <td> {{$item->products->name}} </td>
                                                <td> {{$item->quantity}} </td>
                                                <td> {{$item->price}} </td>
                                                <td>
                                                    <img src="{{asset('assets/uploads/products/'.$item->products->image)}}" width='50px' alt="">
                                                </td>

                                            </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                                <h4>Grand Total : {{$orders->total_price}}</h4>
                            </div>
                       </div>



                        </div>
                </div>

            </div>
        </div>
    </div>
@endsection
