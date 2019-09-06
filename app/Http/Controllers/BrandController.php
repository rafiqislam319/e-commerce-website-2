<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('admin.brand.add-brand');
    }
    public function saveBrandInfo(Request $request){
        $this->validate($request,[
            'brand_name' => 'required|regex:/^[\pL\s\-]+$/u|max:22|min:2',
            'brand_description' => 'required',
            'publication_status' => 'required'
            ]);


        $brands = new Brand();
        $brands->brand_name             = $request->brand_name;
        $brands->brand_description      = $request->brand_description;
        $brands->publication_status     = $request->publication_status;
        $brands->save();
        return redirect('/add-brand')->with('message', 'Brand Info save Successfully');
    }
    public function managgeBrandInfo(){

        $brands = Brand::all();
        return view('admin.brand.manage-brand', ['brands'=>$brands]);
    }
    public function unpublishedBrandInfo($id){
        $brand = Brand::find($id);
        $brand->publication_status = 0;
        $brand->save();
        return redirect('/manage-brand')->with('message', 'Brand Info Unpublished');

    }
    public function publishedBrandInfo($id){
        $brand = Brand::find($id);
        $brand->publication_status = 1;
        $brand->save();
        return redirect('/manage-brand')->with('message', 'Brand Info Published');
    }
    public function editBrandInfo($id){
        $brands = Brand::find($id);
        return view('admin.brand.edit-brand', ['brand'=>$brands]);
    }
    public function updateBrandInfo(Request $request){
        $brand = Brand::find($request->brand_id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('/manage-brand')->with('message', 'Brand Info updated successfully');
    }
    public function deleteBrandInfo($id){
        $brand= Brand::find($id);
        $brand->delete();
        return redirect('/manage-brand')->with('message', 'Brand Info deleted successfully');
    }
}
