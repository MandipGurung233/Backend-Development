<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\http\Controllers\loggedController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/logout',function(){
    Session::forget('user');
    return redirect('login')->with('status','Successfuly logged out');;
});

Route::get('/login',[loginController::class,'login']);
Route::get('/register',[loginController::class,'register']);
Route::post('/login',[loginController::class,'loggedIn']);
Route::post('/register',[loginController::class,'registered']);
Route::get('/contact',[loggedController::class,'contact']);
Route::post('/contact',[loggedController::class,'send']);



