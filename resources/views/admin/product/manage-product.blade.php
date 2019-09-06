@extends('admin.master')
@section('title')
    Manage Product
@endsection

@section('body')

    <br/>
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Manage Product Form</h4>
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>SI. NO</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Quantity</th>
                            <th>Product Price</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $product->category_name }}</td>
                                <td>{{ $product->brand_name }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>
                                    <img src="{{ asset( $product->product_image) }}" alt="" height="100" width="100">
                                </td>
                                <td>{{ $product->product_quantity }}</td>
                                <td>{{ $product->product_price }}</td>
                                <td>{{ $product->publication_status ==1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('view-details',['id'=>$product->id]) }}" class="btn btn-info btn-xs" title="View Details">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                    </a>
                                    @if($product->publication_status ==1)
                                    <a href="{{ route('un-published-product', ['id'=>$product->id]) }}" class="btn btn-info btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                    @else
                                    <a href="{{ route('published-product', ['id'=>$product->id]) }}" class="btn btn-warning btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                    @endif
                                    <a href="{{ route('edit-product',['id'=>$product->id]) }}" class="btn btn-success btn-xs" title="Edit">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-product',['id'=>$product->id]) }}" onclick="return confirm('Are you sure to delete this');" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash" title="Delete"></span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                    </table>

                </div>

            </div>

        </div>
    </div>
@endsection


