@extends('layouts.admin')

@section('content')
        <div class="card">
                <div class="card-header">
                        <h4>Add Category</h4>
                </div>
                <div class="card-body">
                      <form action="{{url ('insert-category')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="row">
                                <div class="col-sm-6">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name">
                                </div>
                                <div class="col-sm-6">
                                        <label for="">Slug</label>
                                        <input type="text" class="form-control" name="slug">
                                </div>
                               

                                <div class="col-sm-12 mb-3">
                                        <label for="">Description</label>
                                        <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="col-sm-6">
                                        <label for="">status</label>
                                        <input type="checkbox" name="status">
                                </div>
                                <div class="col-sm-6">
                                        <label for="">Popular</label>
                                        <input type="checkbox" name="popular">
                                </div>

                            
                                <div class="col-sm-12">
                                        <label for="">image</label>
                                        <input type="file" name="image" class="form-control">

                                </div>

                                <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                          </div>
                      </form>
                </div>
        </div>
@endsection