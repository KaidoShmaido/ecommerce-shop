@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Registered Users</h1>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email </th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($users as $item)
                    <tr>
                        <td>{{$item ->id}}</td>
                        <td>{{$item->fname .' '.$item->lname}}</td>
                        <td>{{$item ->email}}</td>
                        <td>{{$item ->phone}}</td>
                        <td>
                            <a href="{{url('view-users/'.$item->id)}}" class="btn btn-primary">View</a>
                        </td>
                      
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
        
    @endsection

