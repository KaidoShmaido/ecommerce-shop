@extends('layouts.front')
@section('title')
    Checkout
@endsection

@section('content')
        <div class="container mt-5">
            <form action="{{url('place-order')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h6>Basic Details</h6>
                            </div>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control"  value="fname" placeholder="Enter First name">
                                </div>


                                  <div class="col-md-6">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control"  value="lname" placeholder="Enter Last name">
                                </div>
                               
                                  <div class="col-md-6">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control"  value="email" placeholder="Enter Email">
                                </div>
                                  <div class="col-md-6">
                                    <label for="">phone</label>
                                    <input type="text" class="form-control"  value="phone" placeholder="Enter Phone Number">
                                </div>
                                  <div class="col-md-6">
                                    <label for="">Address </label>
                                    <input type="text" class="form-control"  value="address" placeholder="Enter Address ">
                                </div>
                                <div class="col-md-6">
                                    <label for="">City</label>
                                    <input type="text" class="form-control"  value="city" placeholder="Enter City name">
                                </div>
                                <div class="col-md-6">
                                    <label for="">State</label>
                                    <input type="text" class="form-control"  value="state" placeholder="Enter State name">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Country</label>
                                    <input type="text" class="form-control"  value="country" placeholder="Enter Country name">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Zip Code</label>
                                    <input type="text" class="form-control"  value="zipcode" placeholder="Enter Zip code">
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
                                <button type="submit" class="btn btn-primary float-end">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            
            </form>
        </div>
@endsection