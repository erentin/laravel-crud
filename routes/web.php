<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
@@ -16,3 +17,5 @@
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return redirect()->route('courses.index');
});

Route::resource('courses', CourseController::class);
Route::resource('students',StudentController::class);