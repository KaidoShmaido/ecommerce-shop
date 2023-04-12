@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>User Details
                        <a href="{{url('users')}}" class="btn btn-primary">back</a>
                    </h4>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label for="">Role</label>
                            <div class="p-2 border">{{$users->role_as =='0'?'User':"Admin"}}</div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <label for="">First Name</label>
                            <div class="p-2 border">{{$users->fname}}</div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <label for="">Last Name</label>
                            <div class="p-2 border">{{$users->lname}}</div>
                        </div>


                        <div class="col-md-4 mt-3">
                            <label for="">Phone</label>
                            <div class="p-2 border">{{$users->phone}}</div>
                        </div>

                        
                        <div class="col-md-4 mt-3">
                            <label for="">Email</label>
                            <div class="p-2 border">{{$users->email}}</div>
                        </div>

                        
                        <div class="col-md-4 mt-3">
                            <label for="">Address</label>
                            <div class="p-2 border">{{$users->address}}</div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <label for="">City</label>
                            <div class="p-2 border">{{$users->city}}</div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <label for="">state</label>
                            <div class="p-2 border">{{$users->state}}</div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <label for="">Country</label>
                            <div class="p-2 border">{{$users->country}}</div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <label for="">Zipcode</label>
                            <div class="p-2 border">{{$users->zipcode}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection

