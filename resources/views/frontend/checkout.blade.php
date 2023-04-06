@extends('layouts.front')
@section('title')
    Checkout
@endsection

@section('content')
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>Basic Details</h6>
                        </div>
                        <hr>
                        <div class="row checkout-form">
                            <div class="col-md-6">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" placeholder="Enter first name">
                            </div>
                              <div class="col-md-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter Last name">
                            </div>
                              <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" placeholder="Enter Email">
                            </div>
                              <div class="col-md-6">
                                <label for="phone">phone</label>
                                <input type="text" class="form-control" placeholder="Enter Phone Number">
                            </div>
                              <div class="col-md-6">
                                <label for="firstName">Address </label>
                                <input type="text" class="form-control" placeholder="Enter Address ">
                            </div>
                            <div class="col-md-6">
                                <label for="firstName">City</label>
                                <input type="text" class="form-control" placeholder="Enter City name">
                            </div>
                            <div class="col-md-6">
                                <label for="firstName">State</label>
                                <input type="text" class="form-control" placeholder="Enter State name">
                            </div>
                            <div class="col-md-6">
                                <label for="firstName">Country</label>
                                <input type="text" class="form-control" placeholder="Enter Country name">
                            </div>
                            <div class="col-md-6">
                                <label for="firstName">Zip Code</label>
                                <input type="text" class="form-control" placeholder="Enter Zip code">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                           <h6>Order Details</h6>
                           <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Product Name</th>
                                        <th> Product Quantity</th>
                                        <th> Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartitems as $item)
                                        <tr>
                                            <td>{{$item->products->name}}</td>
                                            <td>{{$item->prod_qty}}</td>
                                            <td>{{$item->products->selling_price}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button class="btn btn-primary float-end">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection