@extends('front-end.master')

@section('title')
    Home
    @endsection

@section('body')
    <div class="banner-grid">
        <div id="visual">
            <div class="slide-visual">
                <!-- Slide Image Area (1000 x 424) -->
                <ul class="slide-group">
                    <li><img class="img-responsive" src="{{ asset('/') }}/front-end/images/ba1.jpg" alt="Dummy Image" /></li>
                    <li><img class="img-responsive" src="{{ asset('/') }}/front-end/images/ba2.jpg" alt="Dummy Image" /></li>
                    <li><img class="img-responsive" src="{{ asset('/') }}/front-end/images/ba3.jpg" alt="Dummy Image" /></li>
                    <li><img class="img-responsive" src="{{ asset('/') }}/front-end/images/ba4.jpg" alt="Dummy Image" /></li>
                    <li><img class="img-responsive" src="{{ asset('/') }}/front-end/images/ba5.jpg" alt="Dummy Image" /></li>
                </ul>

                <!-- Slide Description Image Area (316 x 328) -->
                <div class="script-wrap">
                    <ul class="script-group">
                        <li><div class="inner-script"><img class="img-responsive" src="{{ asset('/') }}/front-end/images/baa1.jpg" alt="Dummy Image" /></div></li>
                        <li><div class="inner-script"><img class="img-responsive" src="{{ asset('/') }}/front-end/images/baa2.jpg" alt="Dummy Image" /></div></li>
                        <li><div class="inner-script"><img class="img-responsive" src="{{ asset('/') }}/front-end/images/baa3.jpg" alt="Dummy Image" /></div></li>
                        <li><div class="inner-script"><img class="img-responsive" src="{{ asset('/') }}/front-end/images/baa4.jpg" alt="Dummy Image" /></div></li>
                        <li><div class="inner-script"><img class="img-responsive" src="{{ asset('/') }}/front-end/images/baa5.jpg" alt="Dummy Image" /></div></li>
                    </ul>
                    <div class="slide-controller">
                        <a href="#" class="btn-prev"><img src="{{ asset('/') }}/front-end/images/btn_prev.png" alt="Prev Slide" /></a>
                        <a href="#" class="btn-play"><img src="{{ asset('/') }}/front-end/images/btn_play.png" alt="Start Slide" /></a>
                        <a href="#" class="btn-pause"><img src="{{ asset('/') }}/front-end/images/btn_pause.png" alt="Pause Slide" /></a>
                        <a href="#" class="btn-next"><img src="{{ asset('/') }}/front-end/images/btn_next.png" alt="Next Slide" /></a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <script type="text/javascript" src="{{ asset('/') }}/front-end/js/pignose.layerslider.js"></script>
        <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() {
                $('#visual').pignoseLayerSlider({
                    play    : '.btn-play',
                    pause   : '.btn-pause',
                    next    : '.btn-next',
                    prev    : '.btn-prev'
                });
            });
            //]]>
        </script>

    </div>



    <div class="sap_tabs">
        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
            <hr/>
            <hr/>
            <ul class="resp-tabs-list">
                <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><h1 class="text-success">New Arrivals</h1></span></li>

            </ul>
            <div class="resp-tabs-container">
                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                    @foreach($products as $product)
                    <div class="col-md-3 product-men">

                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset($product->product_image) }}" class="pro-image-front" width="280px" height="280px">
                                <img src="{{ asset($product->product_image) }}" class="pro-image-back" width="280px" height="280px">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="{{route('product-details', ['id'=>$product->id, 'name'=>$product->product_name])}}" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">{{ $product->product_name  }}</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">TK. {{ $product->product_price  }}</span>
                                </div>
                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>







    <div class="new_arrivals">
        <div class="container">
            <h3><span>our </span>products</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
            <div class="new_grids">
                <div class="col-md-4 new-gd-left">
                    <img src="{{ asset('/') }}/front-end/images/wed1.jpg" alt=" " />
                    <div class="wed-brand simpleCart_shelfItem">
                        <h4>Wedding Collections</h4>
                        <h5>Flat 50% Discount</h5>
                        <p><i>$250</i> <span class="item_price">$500</span><a class="item_add hvr-outline-out button2" href="#">add to cart </a></p>
                    </div>
                </div>
                <div class="col-md-4 new-gd-middle">
                    <div class="new-levis">
                        <div class="mid-img">
                            <img src="{{ asset('/') }}/front-end/images/levis1.png" alt=" " />
                        </div>
                        <div class="mid-text">
                            <h4>up to 40% <span>off</span></h4>
                            <a class="hvr-outline-out button2" href="product.html">Shop now </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="new-levis">
                        <div class="mid-text">
                            <h4>up to 50% <span>off</span></h4>
                            <a class="hvr-outline-out button2" href="product.html">Shop now </a>
                        </div>
                        <div class="mid-img">
                            <img src="{{ asset('/') }}/front-end/images/dig.jpg" alt=" " />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 new-gd-left">
                    <img src="{{ asset('/') }}/front-end/images/wed2.jpg" alt=" " />
                    <div class="wed-brandtwo simpleCart_shelfItem">
                        <h4>Spring / Summer</h4>
                        <p>Shop Men</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //content -->

    <!-- content-bottom -->

    <div class="content-bottom">
        <div class="col-md-7 content-lgrid">
            <div class="col-sm-6 content-img-left text-center">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="{{ asset('/') }}/front-end/images/p1.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>Mobiles</h4>
                            <span class="separator"></span>
                            <p><span class="item_price">$500</span></p>
                            <span class="separator"></span>
                            <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 content-img-right">
                <h3>Special Offers and 50%<span>Discount On</span> Mobiles</h3>
            </div>

            <div class="col-sm-6 content-img-right">
                <h3>Buy 1 get 1  free on <span> Branded</span> Watches</h3>
            </div>
            <div class="col-sm-6 content-img-left text-center">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="{{ asset('/') }}/front-end/images/p2.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>Watches</h4>
                            <span class="separator"></span>
                            <p><span class="item_price">$250</span></p>
                            <span class="separator"></span>
                            <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-5 content-rgrid text-center">
            <div class="content-grid-effect slow-zoom vertical">
                <div class="img-box"><img src="{{ asset('/') }}/front-end/images/p4.jpg" alt="image" class="img-responsive zoom-img"></div>
                <div class="info-box">
                    <div class="info-content simpleCart_shelfItem">
                        <h4>Shoes</h4>
                        <span class="separator"></span>
                        <p><span class="item_price">$150</span></p>
                        <span class="separator"></span>
                        <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //content-bottom -->
    <!-- product-nav -->

    <div class="product-easy">
        <div class="container">

            <script src="{{ asset('/') }}/front-end/js/easyResponsiveTabs.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#horizontalTab').easyResponsiveTabs({
                        type: 'default', //Types: default, vertical, accordion
                        width: 'auto', //auto or any width like 600px
                        fit: true   // 100% fit in a container
                    });
                });

            </script>
            {{--previous style was here--}}
        </div>
    </div>
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
                    <p>Login to your account. If you do not have any account please register and create your account</p>
                </div>
                <div class="col-md-3 coupons-gd">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    <h4>SELECT YOUR ITEM</h4>
                    <p>Select your desirable item that you needed.</p>
                </div>
                <div class="col-md-3 coupons-gd">
                    <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                    <h4>MAKE PAYMENT</h4>
                    <p>You can make payment through Bkash or Cash On delivery</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
