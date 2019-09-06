<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;


class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.add-category');
    }

    public function saveCategory(Request $request){
        $this->validate($request, [
            'category_name' => 'required|regex:/^[\pL\s\-]+$/u|max:22|min:3',
            'category_description' => 'required',
            'publication_status'  => 'required'

        ]);


        $category = new Category();
        $category->category_name         = $request->category_name;
        $category->category_description  = $request->category_description;
        $category->publication_status    = $request->publication_status;
        $category->save();

        //Category::create($request->all()); this is the shortcut way to save data. only for simple data. but have to define in the model class
        //uporer dui ta Eloquent ORM

            //nicer ta Query Builder
       /* DB::table('categories')->insert([
            'category_name'  => $request->category_name,
            'category_description'  => $request->category_description,
            'publication_status'  => $request->publication_status
        ]);*/

        return redirect('/add-category')->with('message','category info save successfully');

    }


    public function manageCategory(){

       $categories = Category::all();

        return view('admin.category.manage-category',['categories'=>$categories]);
    }
    public function unpublishedCategory($id){
        $category = Category::find($id);
        $category->publication_status = 0;
        $category->save();
        return redirect('/manage-category')->with('message','category info unpublished');
    }
    public function publishedCategory($id){
        $category = Category::find($id);
        $category->publication_status = 1;
        $category->save();
        return redirect('/manage-category')->with('message','category info published');
    }
    public function editCategory($id){

        $category = Category::find($id);

        return view('admin.category.edit-category', ['category'=>$category]);
    }
    public function updateCategory(Request $request){
        $categories = Category::find($request->category_id);
        $categories->category_name = $request->category_name;
        $categories->category_description = $request->category_description;
        $categories->publication_status = $request->publication_status;
        $categories->save();
        return redirect('manage-category')->with('message', 'category updated successfully');
    }
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('manage-category')->with('message', 'Category deleted successfully');

    }

}
