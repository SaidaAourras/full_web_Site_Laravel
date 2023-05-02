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


//home page
Route::get('/index', function () {
    return view('index');
});


//home page
Route::get('/contact', function () {
    return view('contact');
});

//home page
Route::get('/portfolio', function () {
    return view('portfolio');
});

//home page
Route::get('/about', function () {
    return view('about');
});
//home page
Route::get('/referencee', function () {
    return view('referencee');
});
Route::get('/detailsProjet', function () {
    return view('detailsProjet');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blogProjet', function () {
    return view('blogProjet');
});

// // All categorys
// Route::get('/', [CategoryController::class, 'index']);

// // Show Create Form
// Route::get('/categorys/create', [CategoryController::class, 'create']);

// // Store categorys Data
// Route::post('/categorys', [CategoryController::class, 'store']);

// // Single category
// Route::get('/categorys/{category}', [CategoryController::class, 'show']);

// // Show Edit Form
// Route::get('/categorys/{category}/edit', [CategoryController::class, 'edit']);

// // Update Listing
// Route::put('/categorys/{category}', [CategoryController::class, 'update']);

// // Delete Listing
// Route::delete('/categorys/{category}', [CategoryController::class, 'destroy']);

// //Projects

// // All categorys
// // Route::get('/', [ProjectController::class, 'index']);

// // Show Create Form
// // Route::get('/projects/create', [ProjectController::class, 'create']);

// // Store categorys Data
// // Route::post('/projects', [ReferenceController::class, 'store']);


// // Show Create Form
// Route::get('/references/create', [ReferenceController::class, 'create']);

// // Store references Data
// Route::post('/references', [ReferenceController::class, 'store']);

// // All references
// Route::get('/', [ReferenceController::class, 'index']);
// Route::get('/edit/reference/{id}', [ReferenceController::class, 'edit'])->name('reference.edit');

// // Update Listing
// Route::put('/references/{reference}', [ReferenceController::class, 'update']);

// // Delete Listing
// Route::delete('/references/{reference}', [ReferenceController::class, 'destroy']);

// // Single references
// // Route::get('/references/{reference}', [ReferenceController::class, 'show']);
// // Single category
// // Route::get('/reference/{reference}', [ReferenceController::class, 'show']);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
