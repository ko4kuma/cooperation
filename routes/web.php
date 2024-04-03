<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('customer/index', [CustomerController::class, 'index']);

Route::get('customer/my-name', [CustomerController::class, 'getName']);

Route::get('customer/my-city/{city}', [CustomerController::class, 'getCity']);

Route::get('customer/get-student/{name}/{code}', [CustomerController::class, 'getStudent']);
