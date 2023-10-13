<?php


use Illuminate\Support\Facades\Route;
use a
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::get('courses' , function (){
    return "Courses route";
});

Route::get('courses/create' , function (){
    return "On this page you can create a course";
});

Route::get('courses/{course}/{category?}' , function ($course, $category = null ){
    
    if ($category) {
        return "Welcome to course $course of category $category";
    } else {
        return "Welcome to course $course";
    }

});


