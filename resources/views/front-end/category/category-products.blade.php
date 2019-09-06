@extends('front-end.master')

@section('body')
    <div class="page-head">
        <div class="container">
            <h3>Men's Wear</h3>
        </div>
    </div>
    <!-- //banner -->
    <!-- mens -->
    <div class="men-wear">
        <div class="container">
            <div class="col-md-4 products-left">



                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>








            <div class="single-pro">
                @foreach($categoryProducts as $categoryProduct)
                <div class="col-md-3 product-men yes-marg">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="{{asset($categoryProduct->product_image)}}" alt="" class="pro-image-front" width="250" height="300">
                            <img src="{{asset($categoryProduct->product_image)}}" alt="" class="pro-image-back" width="250" height="300">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="{{route('product-details', ['id'=>$categoryProduct->id, 'name'=>$categoryProduct->product_name])}}" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html"> {{ $categoryProduct->product_name }}</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">{{ $categoryProduct->product_price }}</span>
                            </div>
                            <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="clearfix"></div>
            </div>






            <div class="pagination-grid text-right">
                <ul class="pagination paging">
                    <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
