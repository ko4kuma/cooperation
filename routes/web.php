<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PersonController;
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
Route::get('customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::post('customer/store',[CustomerController::class,'store'])->name('customer.store');

