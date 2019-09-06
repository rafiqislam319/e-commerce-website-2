<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Image;
use DB;

class ProductController extends Controller
{
    public function index(){
        $categories = Category::where('publication_status', 1)->get();
        $brands = Brand::where('publication_status', 1)->get();
        return view('admin.product.add-product', [
            'categories' => $categories,
            'brands'  => $brands
        ]);
    }

    protected function productInfoValidate($request){
        $this->validate($request,[
            'category_id' => 'required',
            'brand_id' => 'required',
            'product_name' => 'required',
            'product_price' => 'required',
            'product_quantity' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'product_image' => 'required',
            'publication_status' => 'required',
        ]);
    }
    protected function productImageUpload($request){
        $productImage = $request->file('product_image');
        //$productName = $productImage->getClientOriginalName();
        $imageType = $productImage->getClientOriginalExtension();
        $productName = $request->product_name . '.' .$imageType;
        $directory = 'product-images/';
        $imageUrl = $directory.$productName;
        //$productImage->move($directory,$productName);
        Image::make($productImage)->save($imageUrl);
        return $imageUrl;
    }
    protected function productBasicInfo($request,$imageUrl){
        $products = new Product();
        $products->category_id = $request->category_id;
        $products->brand_id = $request->brand_id;
        $products->product_name = $request->product_name;
        $products->product_price = $request->product_price;
        $products->product_quantity = $request->product_quantity;
        $products->short_description = $request->short_description;
        $products->long_description = $request->long_description;
        $products->product_image = $imageUrl;
        $products->publication_status = $request->publication_status;
        $products->save();
    }

    public function saveProduct(Request $request){
        $productImage = $request->file('product_image');
        $this->productInfoValidate($request);
        $imageUrl = $this->productImageUpload($request);
        $this->productBasicInfo($request,$imageUrl);

      return redirect('/add-product')->with('message', 'Product info save successfully');
    }
    public function manageProduct(){
        $products = DB::table('products')
                    ->join('categories', 'products.category_id', '=', 'categories.id')
                    ->join('brands', 'products.brand_id', '=', 'brands.id')
                    ->select('products.*', 'categories.category_name', 'brands.brand_name')
                    ->get();
        return view('admin.product.manage-product', ['products'=>$products]);
    }
    public function editProduct($id){
        $products = Product::find($id);
        $categories = Category::where('publication_status', 1)->get();
        $brands = Brand::where('publication_status', 1)->get();
        return view('admin.product.edit-product',[
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }

    public function productBasicInfoUpdate($request,$products,$imageUrl=null){
        $products->category_id = $request->category_id;
        $products->brand_id = $request->brand_id;
        $products->product_name = $request->product_name;
        $products->product_price = $request->product_price;
        $products->product_quantity = $request->product_quantity;
        $products->short_description = $request->short_description;
        $products->long_description = $request->long_description;
        if ($imageUrl){
            $products->product_image = $imageUrl;
        }
        $products->publication_status = $request->publication_status;
        $products->save();
    }

    public function updateProduct(Request $request){
            $productImage = $request->file('product_image');
            $products = Product::find($request->product_id);
            if($productImage){
                unlink($products->product_image);
                $imageUrl = $this->productImageUpload($request);
                $this->productBasicInfoUpdate($request,$products,$imageUrl);

            }else{
                $this->productBasicInfoUpdate($request,$products);

            }
            return redirect('/manage-product')->with('message', 'product info updated successfully');

    }

    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('/manage-product')->with('message', 'product info deleted successfully');
    }

    public function unPublishedProduct($id){
        $unpublishedProduct = Product::find($id);
        $unpublishedProduct->publication_status = 0;
        $unpublishedProduct->save();
        return redirect('/manage-product')->with('message', 'product info Unpublished successfully');
    }
    public function PublishedProduct($id){
        $publishedProduct = Product::find($id);
        $publishedProduct->publication_status = 1;
        $publishedProduct->save();
        return redirect('/manage-product')->with('message', 'product info Published successfully');
    }

    public function viewProductDetails($id){
        $product = Product::where('id', $id)->first();    //here id is Product tables main id(field name); and $id is my requested id,that means when i click specific row. If Db field name id match with $id then it will return that specific row information
        return view('admin.product.view-product-details', [
            'product'=> $product,
        ]);
    }
}
