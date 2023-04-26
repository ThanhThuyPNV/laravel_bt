<?php

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
// Cách 1: Trực tiếp
// Route::get('/welcome', function () {
//     return "<h1>Chào mừng các bạn đến với PNV</h1>";
// });
// Cách 2: Tạo View

// Cách 3: 
Route::get('/hello',[App\http\Controllers\BaitapController::class,'hello']);

Route::get('/tinhtong',[App\http\Controllers\BaitapController::class,'tinhtong']);

Route::post('/tinhtong',[App\http\Controllers\BaitapController::class,'tinhtong']);

Route::get('/computeArea',[App\http\Controllers\AreaofshapeController::class,'computeArea']);

Route::post('/computeArea',[App\http\Controllers\AreaofshapeController::class,'computeArea']);


Route::get('/signup',[App\http\Controllers\signupController::class,'index']);

Route::post('/signup',[App\http\Controllers\signupController::class,'displayInfor']);
// require_once __DIR__.'/functions.php';

// Route::get('/sum', function () {
//     $array = [1, 2, 3, 4, 5];
//     $result = sum($array);
//     return "Tổng của mảng là: " . $result;
// });
