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
    function UpdateCategory($keyId){
$data = Category::find($keyId);
return view("panel.update",compact("data"));
    }
    function EditCategory(Request $request){
$data = Category::find($request->cid);
if(isset($request->cimage)){
    $categoryImage = time().".".$request->cimage->extension();
        $request->cimage->move(public_path("assets/img/categories"),$categoryImage);
        $data->image=$categoryImage;
}
$data->name=$request->cname;
$data->save();
return redirect("details")->with("update","successfull");
    }
    function DeleteCategory($id){
 $data =Category::find($id);
 $data->delete();
 return redirect("details")->with("delete","successfully");
    }
}
