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
                        @php($sum = 0)
                        @foreach($cartProducts as $cartProduct)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$cartProduct->name}}</td>
                            <td><img src="{{asset($cartProduct->attributes->image)}}" alt="image" width="70" height="70"/></td>
                            <td>{{$cartProduct->price}}</td>
                            <td>
                                {{ Form::open(['route'=>'update-cart', 'method'=>'post']) }}
                                <input type="number" name="qty" value="{{$cartProduct->quantity}}"/>
                                <input type="hidden" name="id" value="{{$cartProduct->id}}"/>
                                <input type="submit" name="btn" value="update"/>
                                {{ Form::close() }}
                            </td>
                            <td>{{ $total = $cartProduct->price*$cartProduct->quantity }}</td>
                            <td>
                                <a href="{{route('delete-cart-item', ['rowId'=>$cartProduct->id])}}" class="btn btn-danger btn-xs" title="Delete">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                            <?php $sum = $sum + $total; ?>
                            @endforeach
                    </table>
                    <hr/>
                    <table class="table table-bordered">
                        <tr>
                            <th>Item Total (TK.)</th>
                            <td>{{ $sum }}</td>
                        </tr>
                        <tr>
                            <th>Total Vat (TK.)</th>
                            <td>{{ $vat = 0 }}</td>
                        </tr>
                        <tr>
                            <th>Grand Total (TK.)</th>
                            <td>{{ $sum+$vat }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11 col-md-offset-1">
                    <a href="{{route('checkout')}}" class="btn btn-success pull-right">Checkout</a>
                    <a class="btn btn-success">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
@endsection
