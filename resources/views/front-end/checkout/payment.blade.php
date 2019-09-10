@extends('front-end.master')
@section('body')
    <div class="page-head">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Payment</span></h3>
        </div>
    </div>
    <!--banner-->

    <!--content-->
    <div class="content">
        <!--single-->
        <div class="single-wl3">
            <div class="container">

                <!--Product Description-->
                <br/>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 well">
                        </br>

                        {{ Form::open(['route'=>'new-order', 'method'=>'POST']) }}
                        <table class="table table-bordered">
                            <tr>
                                <th>Cash On Delivery</th>
                                <th><input type="radio" name="payment_type" value="Cash"> Cash On Delivery</th>
                            </tr>
                            <tr>
                                <th>Paypal</th>
                                <th><input type="radio" name="payment_type" value="Bkash"> Bkash</th>
                            </tr>
                            <tr>
                                <th>Bkash</th>
                                <th><input type="radio" name="payment_type" value="Paypal"> Paypal</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th><input type="submit" name="btn" value="confirm order"></th>
                            </tr>
                        </table>
                        {{ Form::close() }}

                    </div>

                </div>
                <!--Product Description-->
            </div>
        </div>
        <!--single-->

        <!--new-arrivals-->
    </div>

@endsection

