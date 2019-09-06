@extends('admin.master')
@section('title')
    View Product Details
@endsection

@section('body')

    <br/>
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Product Details Form</h4>
                </div>
                <div class="panel-body">

                        <table class="table table-bordered">
                            <tr>
                                <th>Product Name</th>
                                <th>{{ $product->product_name }}</th>
                            </tr>
                            <tr>
                                <th>Product Image</th>
                                <th>
                                    <img src="{{asset($product->product_image)}}" alt="img" height="300" width="300">
                                </th>
                            </tr>
                            <tr>
                                <th>Product Quantity</th>
                                <th>{{ $product->product_quantity }}</th>
                            </tr>
                            <tr>
                                <th>Product Price</th>
                                <th>{{ $product->product_price }}</th>
                            </tr>
                            <tr>
                                <th>Publication Status</th>
                                <th>{{ $product->publication_status }}</th>
                            </tr>
                            <tr>
                                <th>Short Description</th>
                                <th>{{ $product->short_description }}</th>
                            </tr>
                            <tr>
                                <th>Long Description</th>
                                <td>{{ $product->long_description }}</td>
                            </tr>

                        </table>


                </div>

            </div>

        </div>
    </div>
@endsection


