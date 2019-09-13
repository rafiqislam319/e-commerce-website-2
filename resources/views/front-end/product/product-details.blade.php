@extends('front-end.master')
@section('body')

    <div class="page-head">
        <div class="container">
            <h3>Details</h3>
        </div>
    </div>
    <!-- //banner -->
    <!-- single -->
    <div class="single">
        <div class="container">
            <div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <!-- FlexSlider -->
                        <script>
                            // Can also be used with $(document).ready()
                            $(window).load(function() {
                                $('.flexslider').flexslider({
                                    animation: "slide",
                                    controlNav: "thumbnails"
                                });
                            });
                        </script>
                        <!-- //FlexSlider-->
                        <ul class="slides">
                            <li data-thumb="{{ asset('/') }}/front-end/images/d2.jpg">
                                <div class="thumb-image"> <img src="{{ asset($product->product_image) }}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
                <h3>{{$product->product_name}}</h3>
                <p><span class="item_price">Tk. {{$product->product_price}}</span></p>
                <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
                </div>
                <div class="description">
                        <p><b class="text-success">Quick Overview   :   </b>{{$product->short_description}}</p>
                </div>
                {{Form::open(['route'=>'add-to-cart', 'method'=>'POST']) }}
                <div class="color-quality">
                    <div class="color-quality-right">
                        <h5>Quantity :</h5>
                        <input type="number" name="qty" value="1" min="1"/>
                        <input type="hidden" name="id" value="{{ $product->id }}"/>
                    </div>
                </div>
                <br/>
                <div class="occasion-cart">
                    <input type="submit" name="btn" value="Add to Cart" class="item_add hvr-outline-out button2"/>
                </div>
                {{Form::close()}}

            </div>
            <div class="clearfix"> </div>

            <div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Long Description</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
                            <p>{{$product->long_description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
