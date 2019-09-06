@extends('front-end.master')
@section('body')

    <div class="page-head">
        <div class="container">
            <h3>Add to Cart</h3>
        </div>
    </div>
    <!-- //banner -->
    <!-- single -->
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-md-11 col-md-offset-1">
                    <h3 class="text-center text-success">My Shopping Cart</h3>
                    <hr/>
                    <table class="table table-bordered">
                        <tr class="bg-danger text-right">
                            <th>SL No</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price TK.</th>
                            <th>Quantity</th>
                            <th>Total Price TK.</th>
                            <th>Action</th>
                        </tr>
                        @php($i = 1)
                        @foreach($cartProducts as $cartProduct)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$cartProduct->name}}</td>
                            <td><img src="{{asset($cartProduct->attributes->image)}}" alt="image" width="70" height="70"/></td>
                            <td>{{$cartProduct->price}}</td>
                            <td>{{$cartProduct->quantity}}</td>
                            <td>{{$cartProduct->price*$cartProduct->quantity}}</td>
                            <td>
                                <a class="btn btn-danger btn-xs" title="Delete">
                                    <span class="glyphicon glyphicon-trash"></span>
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
