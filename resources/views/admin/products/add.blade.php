@extends('layouts.admin')

@section('content')
        <div class="card">
                <div class="card-header">
                        <h4>Add Product</h4>
                </div>
                <div class="card-body">
                      <form action="{{url ('insert-product')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="row">
                                <div class="col-md-12 mb-3">    
                                    <select class="form-select" name="category_id" aria-label="Default select example">
                                        <option value="" >Select a Category</option>
                                        @foreach ($category as $item )
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                    
                                    
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name">
                                </div>
                                <div class="col-sm-6">
                                        <label for="">Slug</label>
                                        <input type="text" class="form-control" name="slug">
                                </div>
                                <div class="col-sm-12">
                                        <label for="">Small Description</label>
                                        <input type="text" name="small_description" class="form-control">

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
                                        <label for="">Trending</label>
                                        <input type="checkbox" name="trending">
                                </div>

                              
                                <div class="col-sm-12">
                                        <label for="">Original Price</label>
                                        <input type="number" name="original_price" class="form-control">

                                </div>

                                <div class="col-sm-12">
                                        <label for="">selling Price</label>
                                        <input type="number" name="selling_price" class="form-control">

                                </div>
                             

                                <div class="col-sm-12">
                                        <label for="">Quantity</label>
                                        <input type="number" name="quantity" class="form-control">

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