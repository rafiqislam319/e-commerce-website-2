@extends('front-end.master')
@section('body')
    <div class="page-head">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Shipping</span></h3>
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
                <div class="col-md-12 well text-center text-success">
                    Dear {{Session::get('customerName')}}. You have to give us product shipping info to complete your valuable order. If your billing info & shipping info are same then just press save shipping info button
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        </br>

                        <h3 class="text-center text-success">Shipping info goes here!!!</h3>
                        </br>
                        {{ Form::open(['route'=>'new-shipping', 'method'=>'POST']) }}
                        <div class="form-group">
                            <input type="text" value="{{$customer->first_name.' '.$customer->last_name}}" name="full_name" class="form-control" placeholder="Full_Name">
                        </div>
                        <div class="form-group">
                            <input type="email" value="{{$customer->email_address}}" name="email_address" class="form-control" placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{$customer->phone_number}}" name="phone_number" class="form-control" placeholder="phone_number">
                        </div>
                        <div class="form-group">
                            <textarea name="address" placeholder="Address" class="form-control">{{$customer->address}}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" class="form-control btn btn-info" value="Save Shipping info">
                        </div>
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
