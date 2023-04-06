@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Category Page</h1>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($category as $item)
                    <tr>
                        <td>{{$item ->id}}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/category/'.$item->image) }}" alt="" class="category-image">
                        </td>
                        <td>{{$item ->name}}</td>
                        <td>{{$item ->description}}</td>
                        <td>
                            <a href="{{url ('edit-category/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{url('delete-category/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
        
    @endsection

