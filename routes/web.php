<?php

use App\Http\Controllers\postsController;
use App\Http\Controllers\registration;
use App\Http\Controllers\viewData;
use App\Http\Controllers\SingeActionController;
use App\Http\Controllers\storedata;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get("/demo/{name?}/{id?}",function ($name=null, $id=null){
//     $dec = "<h2>apple</h2>";
//     $data = compact('name','id','dec');
//     return view("demo")->with($data);
// });


// Route::get('/',function(){
//     return view('home');
// });
// Route::get('/about',function(){
//     return view('about');
// });
// Route::get('/course',function(){
//     return view('course');
// });
Route::get('/',[postsController::class,'home']);
Route::get('/about',[postsController::class,'about']);
Route::get('/course',SingeActionController::class);
Route::get('/form',[registration::class,'index']);
Route::post('/form',[registration::class,'display']);
Route::get('/customerform',[storedata::class,'index']);
Route::post('/customerform',[storedata::class,'store']);
Route::get('/viewdata',[ViewData::class,'viewData']);
Route::get('/delete/{id}',[registration::class,'delete']);
Route::get('/edit/{id}',[registration::class,'edit']);
Route::post('/edit/{id}',[registration::class,'abcde']);