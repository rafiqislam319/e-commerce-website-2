@extends('front-end.master')
@section('body')
    <div class="page-head">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>SignUp</span></h3>
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
                    <div class="col-md-6 col-md-offset-3 well">
                        <h3 class="text-center text-success">Register if you are not Registered before!!!</h3>
                        </br>
                        {{ Form::open(['route'=>'customer-sign-up', 'method'=>'POST']) }}
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First_Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" placeholder="Last_Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email_address" id="email_address" class="form-control" placeholder="example@gmail.com">
                            <span class="text-success" id="res"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone_number" class="form-control" placeholder="phone_number">
                        </div>
                        <div class="form-group">
                            <textarea name="address" placeholder="Address" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="regbtn" name="btn" class="form-control btn btn-info" value="Register">
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
