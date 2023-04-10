@extends('layouts.admin')

@section('content')
        <div class="card">
                <div class="card-header">
                        <h4>Add Product</h4>
                </div>
                <div class="card-body">
                      <form action="{{ url('update-product/'.$products->id) }}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="row">
                                <div class="col-md-12 mb-3">    
                                    <label for="">Category</label>
                                    <select class="form-select"  aria-label="Default select example">
                                        <option value="">{{$products->category->name}}</option>
                                        
                    
                                    
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$products->name}}">
                                </div>
                                <div class="col-sm-6">
                                        <label for="">Slug</label>
                                        <input type="text" class="form-control" name="slug" value="{{$products->slug}}">
                                </div>
                                <div class="col-sm-12">
                                        <label for="">Small Description</label>
                                        <input type="text" name="small_description" class="form-control" value="{{$products->small_description}}">

                                </div>

                                <div class="col-sm-12 mb-3">
                                        <label for="">Description</label>
                                        <textarea name="description" id="" cols="30" rows="5" class="form-control">{{$products->slug}}</textarea>
                                </div>
                                <div class="col-sm-6">
                                        <label for="">status</label>
                                        <input type="checkbox" name="status" value="{{$products->status ? 'checked': ''}} ">
                                </div>
                                <div class="col-sm-6">
                                        <label for="">Trending</label>
                                        <input type="checkbox" name="trending" value="{{$products->trending ? 'checked': ''}}">
                                </div>

                             
                                <div class="col-sm-12">
                                        <label for="">Original Price</label>
                                        <input type="number" name="original_price" class="form-control" value="{{$products->original_price}}">

                                </div>

                                <div class="col-sm-12">
                                        <label for="">selling Price</label>
                                        <input type="number" name="selling_price" class="form-control" value="{{$products->selling_price}}">

                                </div>
                             

                                <div class="col-sm-12">
                                        <label for="">Quantity</label>
                                        <input type="number" name="quantity" class="form-control" value="{{$products->quantity}}">

                                </div>

                            
                           
                                @if ($products->image)
                                <img src="{{asset('assets/uploads/products/'.$products->image)}}" alt="" width="100px" height="100px">
                                    
                                @endif
                                <div class="col-sm-12">
                                        <input type="file" name="image" class="form-control"  >

                                </div>

                                <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                          </div>
                      </form>
                </div>
        </div>

@endsection