<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\eventController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index',[eventController::class,'index']);
Route::get('/register',[eventController::class,'register']);
Route::post('/insert',[eventController::class,'insert']);
Route::get('/login',[eventController::class,'login']);
Route::post('/loginaction',[eventController::class,'loginaction']);
Route::get('/logout',[eventController::class,'logout']);

Route::get('/booking',[eventController::class,'booking']);

Route::post('/bookinsert',[eventController::class,'bookinsert']);

Route::get('/bdetails',[eventController::class,'bdetails']);
Route::get('/adminlogin',[eventController::class,'adminlogin']);
Route::post('/adminloginaction',[eventController::class,'adminloginaction']);
Route::get('/adminlogout',[eventController::class,'adminlogout']);
Route::get('/admin',[eventController::class,'admin']);
Route::get('/bkdetails/{id}',[eventController::class,'bkdetails']);
Route::get('/adminapprove/{id}',[eventController::class,'adminapprove']);
Route::get('/admincancel/{id}',[eventController::class,'admincancel']);

