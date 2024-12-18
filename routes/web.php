<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', [UserController::class, 'getUser']);


// database queries 
Route::get('users', [UserController::class, 'quaries']);

// Route methods 
/* Route::view('students', 'students');
Route::get('studentdata', [StudentController::class, 'get']);
Route::post('studentdata', [StudentController::class, 'post']);
Route::put('studentdata', [StudentController::class, 'put']);
Route::delete('studentdata', [StudentController::class, 'delete']); */


// any and match 
Route::view('students', 'students');
// Route::any('studentdata', [StudentController::class, 'any']);
/* 
Route::match(['get', 'post'],'/studentdata', [StudentController::class, 'group1']);
Route::match(['patch', 'delete'],'/studentdata', [StudentController::class, 'group2']);
 */


// Http request class 
// Route::post('studentdata', [StudentController::class, 'login']);

// session 
Route::view('login','login');
Route::view('profile','profile');
Route::post('login', [UserController::class, 'login']);
Route::get('logout', [UserController::class, 'logout']);


// session flash 
Route::post('addUser', [UserController::class, 'addUser']);
Route::view('welcome', 'welcome');


// Upload File 
Route::view('upload', 'upload');
Route::view('display', 'display');
Route::post('upload', [UploadController::class, 'upload']);



// localization 
Route::view('home', 'home');
Route::view('about', 'about');

Route::get('/about/{lang}', function($lang){
    App::setLocale($lang);
    return view('/about');
});


// selecting language by users 
Route::middleware('SetLang')->group(function(){
    Route::get('home', function(){
        return view('home');
    });
    
    Route::get('about', function(){
        return view('about');
    });

    Route::get('setlang/{lang}', function($lang){
        Session::put('lang', $lang);
        return redirect('/home');
    });
});