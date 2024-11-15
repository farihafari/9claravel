<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //add cat
    function AddCategory(Request $request){
        $category = new Category();
        $category->name = $request->cname;
        $categoryImage = time().".".$request->cimage->extension();
        $request->cimage->move(public_path("assets/img/categories"),$categoryImage);
        $category->image=$categoryImage;
        $category->save();
        return back()->with("submitted","successfully");
    }

    function AllCategories(){
        $allCat = Category::all();
        return view("panel.viewcat",compact("allCat"));
    }
}
