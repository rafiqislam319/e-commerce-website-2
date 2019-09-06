<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class eCommerceController extends Controller
{
    public function index(){
        $products = Product::where('publication_status', 1)
                            ->orderBy('id', 'DESC')
                            ->take(32)
                            ->get();
        return view('front-end.home.home', [
            'products' =>$products
        ]);
    }
    public function categoryProduct($id){
        $categoryProducts = Product::where('category_id', $id)
                                    ->where('publication_status', 1)
                                    ->get();
        return view('front-end.category.category-products', [
            'categoryProducts' => $categoryProducts
        ]);
    }
    public function contactUs(){
        return view('front-end.contact.contact-us');
    }

    public function productDetails($id){
        $product = Product::find($id);

        return view('front-end.product.product-details', ['product'=>$product]);
    }
}
