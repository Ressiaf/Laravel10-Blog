<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;

Route::get( '/', HomeController::class );


Route::controller( CoursesController::class ) -> group( function( ) {
    Route::get( 'courses',  'index' );
    Route::get( 'courses/create',  'create' );
    Route::get('courses/{course}/{category?}', 'show');
});



