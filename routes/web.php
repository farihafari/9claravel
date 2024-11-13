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