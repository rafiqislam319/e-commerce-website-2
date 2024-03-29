@extends('front-end.master')
@section('body')
    <div class="page-head">
        <div class="container">
            <h3>Contact</h3>
        </div>
    </div>
    <!-- //banner -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="contact-grids">
                <div class="col-md-4 contact-grid text-center animated wow slideInLeft" data-wow-delay=".5s">
                    <div class="contact-grid1">
                        <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                        <h4>Address</h4>
                        <p>12K Street, 45 Building Road <span>New York City.</span></p>
                    </div>
                </div>
                <div class="col-md-4 contact-grid text-center animated wow slideInUp" data-wow-delay=".5s">
                    <div class="contact-grid2">
                        <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                        <h4>Call Us</h4>
                        <p>+1234 758 839<span>+1273 748 730</span></p>
                    </div>
                </div>
                <div class="col-md-4 contact-grid text-center animated wow slideInRight" data-wow-delay=".5s">
                    <div class="contact-grid3">
                        <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                        <h4>Email</h4>
                        <p><a href="mailto:info@example.com">info@example1.com</a><span><a href="mailto:info@example.com">info@example2.com</a></span></p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="map wow fadeInDown animated" data-wow-delay=".5s">
                <h3 class="tittle">View On Map</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" frameborder="0" style="border:0"></iframe>
            </div>
            <h3 class="tittle">Contact Form</h3>
            <form>
                <div class="contact-form2">
                    <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                    <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                    <input type="submit" value="Submit" >
                </div>
            </form>
        </div>
    </div>

    <!-- //contact -->

    <!-- //product-nav -->
    <div class="coupons">
        <div class="container">
            <div class="coupons-grids text-center">
                <div class="col-md-3 coupons-gd">
                    <h3>Buy your product in a simple way</h3>
                </div>
                <div class="col-md-3 coupons-gd">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <h4>LOGIN TO YOUR ACCOUNT</h4>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                        sit amet, consectetur.</p>
                </div>
                <div class="col-md-3 coupons-gd">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    <h4>SELECT YOUR ITEM</h4>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                        sit amet, consectetur.</p>
                </div>
                <div class="col-md-3 coupons-gd">
                    <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                    <h4>MAKE PAYMENT</h4>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                        sit amet, consectetur.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
