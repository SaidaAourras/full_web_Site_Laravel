<?php

use App\Http\Controllers\CategoryController;
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

// All Listings
Route::get('/', [CategoryController::class, 'index']);

// Show Create Form
Route::get('/categorys/create' , [CategoryController::class, 'create']);

// Store Listing Data
Route::post('/categorys' , [CategoryController::class, 'store']);