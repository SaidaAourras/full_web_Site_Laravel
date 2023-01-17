<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
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

// All categorys
Route::get('/', [CategoryController::class, 'index']);

// Show Create Form
Route::get('/categorys/create', [CategoryController::class, 'create']);

// Store categorys Data
Route::post('/categorys', [CategoryController::class, 'store']);

// Single category
Route::get('/categorys/{category}', [CategoryController::class, 'show']);

// Show Edit Form
Route::get('/categorys/{category}/edit', [CategoryController::class, 'edit']);

// Update Listing
Route::put('/categorys/{category}', [CategoryController::class, 'update']);

// Delete Listing
Route::delete('/categorys/{category}', [CategoryController::class, 'destroy']);

// All Projects
// Route::get('/', [ProjectController::class, 'index']);

// Show Create Form
// Route::get('/projects/add' , [ProjectController::class, 'create']);

// // Store categorys Data
// Route::post('/projects' , [ProjectController::class, 'store']);
