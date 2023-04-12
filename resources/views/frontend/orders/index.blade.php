@extends('layouts.front')

@section('title')
My Orders
@endsection

@section('content')
        <div class="container py-5">
                <div class="row">
                    <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tracking Number</th>
                                        <th>Total Price</th>
                                        <td>Status</td>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($orders as $item )
                                        <tr>
                                            <td>{{$item->tracking_no}}</td>
                                            <td>{{$item->total_price}}</td>
                                            <td>{{$item->status == '0'?'pending':"completed"}}</td>
                                            <td>
                                                <a href="{{url('view-order/'.$item->id)}}" class="btn btn-primary">View</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
        </div>  
@endsection  