<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
Route::get('/', function () {
    return view('panel.index');
});
Route::get("category",function(){
    return view("panel.category");
});
Route::post("category",[CategoryController::class,"AddCategory"]);
Route::get("details",[CategoryController::class,"AllCategories"]);
Route::get("update.{id}",[CategoryController::class,"UpdateCategory"]);
Route::post("edit",[CategoryController::class,"EditCategory"]);
Route::get("delete.{id}",[CategoryController::class,"DeleteCategory"]);

