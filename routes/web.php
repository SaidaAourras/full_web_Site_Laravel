<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReferenceController;
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

//Projects

// All categorys
// Route::get('/', [ProjectController::class, 'index']);

// Show Create Form
// Route::get('/projects/create', [ProjectController::class, 'create']);

// Store categorys Data
Route::post('/projects', [ProjectController::class, 'store']);
Route::post('/references', [ReferenceController::class, 'store']);
