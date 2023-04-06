@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Product Page</h1>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Category</th>
                        <th scope="col">Name</th>
                        <th scope="col">Selling Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($products as $item)
                    <tr>
                        <td>{{$item ->id}}</td>
                        <td>{{$item->category->name ?? 'None'}}</td>
                        <td>{{$item ->name}}</td>
                        <td>{{$item ->selling_price}}</td>


                        <td>
                            <img src="{{ asset('assets/uploads/products/'.$item->image) }}" alt="" class="category-image">
                        </td>
                        <td>
                            <a href="{{url ('edit-product/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{url('delete-product/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
        
    @endsection

