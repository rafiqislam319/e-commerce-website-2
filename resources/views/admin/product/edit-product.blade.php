@extends('admin.master')
@section('title')
    Edit Product
@endsection

@section('body')
    <br/>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit Product Form</h4>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route'=>'update-product', 'method'=> 'POST','class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'name'=>'productEditForm']) !!}
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category_id">
                                <option>----Select Category----</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Brand Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="brand_id">
                                <option>----Select Brand----</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{ $brand->brand_name }}</option>>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('brand_id') ? $errors->first('brand_id') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_name" value="{{ $products->product_name }}">
                            <input type="hidden" class="form-control" name="product_id" value="{{ $products->id }}">
                            <span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Product Price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="product_price" value="{{ $products->product_price }}">
                            <span class="text-danger">{{ $errors->has('product_price') ? $errors->first('product_price') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Product Quantity</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="product_quantity" value="{{ $products->product_quantity }}">
                            <span class="text-danger">{{ $errors->has('product_quantity') ? $errors->first('product_quantity') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Product Short Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="short_description">{{ $products->short_description }}</textarea>
                            <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Product Long Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="editor" name="long_description">{{ $products->long_description }}</textarea>
                            <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Product Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="product_image" accept="image/*">
                            <img src="{{asset($products->product_image)}}" alt="img" height="80" width="80">
                            <span class="text-danger">{{ $errors->has('product_image') ? $errors->first('product_image') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Publication Status</label>
                        <div class="col-sm-9">
                            <input type="radio"  name="publication_status"  {{ $products->publication_status ==1 ? 'checked' : '' }} value="1" > Published
                            <input type="radio"  name="publication_status"  {{ $products->publication_status ==0 ? 'checked' : '' }} value="0"> Unpublished
                        </div>
                        <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Product Info"/>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>

            </div>

        </div>
    </div>
    <script>
        document.forms['productEditForm'].elements['category_id'].value = '{{$products->category_id}}';
        document.forms['productEditForm'].elements['brand_id'].value = '{{$products->brand_id}}';
    </script>
@endsection


