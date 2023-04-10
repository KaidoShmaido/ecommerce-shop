@extends('layouts.admin')

@section('content')
        <div class="card">
                <div class="card-header">
                        <h4>Edit/Update Category</h4>
                </div>
                <div class="card-body">
                      <form action="{{url ('update-category/'.$category->id)}}" method="PUT" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      @method('PUT')
                        <div class="row">
                                <div class="col-sm-6 mb-3">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" value="{{$category -> name}}" name="name">
                                </div>
                                <div class="col-sm-6 mb-3">
                                        <label for="">Slug</label>
                                        <input type="text" class="form-control" value="{{$category -> slug}}" name="slug">
                                </div>
                               

                                <div class="col-sm-12 mb-3">
                                        <label for="">Description</label>
                                        <textarea name="description" id="" cols="30"  rows="5" class="form-control">{{$category->description}}"</textarea>
                                </div>
                                <div class="col-sm-6 mb-3">
                                        <label for="">status</label>
                                        <input type="checkbox" name="status" {{$category->status == '1' ? 'checked':'' }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                        <label for="">Popular</label>
                                        <input type="checkbox" name="popular" {{$category->popular == '1' ? 'checked':'' }}"">
                                </div>

                          

                                @if($category->image)
                                <img src="{{ asset('assets/uploads/category/'.$category->image)}}" alt="" class="category-image">
                                @endif
                                <div class="col-sm-12">
                                        
                                        <input type="file" class="form-control" name="image" width="20%" >
                                </div>

                                <div class="col-sm-12">
                                        
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                          </div>
                      </form>
                </div>
        </div>
@endsection