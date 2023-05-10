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
// Route::get('/portfolio', function () {
//     return view('portfolio');
// });

//home page
Route::get('/about', function () {
    return view('about');
});
// //home page
// Route::get('/referencee', function () {
//     return view('referencee');
// });
Route::get('/detailsProjet', function () {
    return view('detailsProjet');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blogProjet', function () {
    return view('blogProjet');
});

// CRUD REFERENCE

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/referencee', [App\Http\Controllers\ReferenceController::class, 'index'])->name('referencee');
Route::get('/reference', [App\Http\Controllers\ReferenceController::class, 'indexView'])->name('reference');
Route::get('/create/reference', [App\Http\Controllers\ReferenceController::class, 'create'])->name('reference.create');
Route::post('/store/reference', [App\Http\Controllers\ReferenceController::class, 'store'])->name('reference.store');
Route::get('/edit/reference/{id}', [App\Http\Controllers\ReferenceController::class, 'edit'])->name('reference.edit');
Route::put('/update/reference/{id}', [App\Http\Controllers\ReferenceController::class, 'update'])->name('reference.update');
Route::delete('/delete/reference/{id}', [App\Http\Controllers\ReferenceController::class, 'delete'])->name('reference.delete');

// CRUD CATEGORY

Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::get('/create/category', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
Route::post('/store/category', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::get('/edit/category/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::put('/update/category/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
Route::delete('/delete/category/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('category.delete');

// CRUD PROJECTS

Route::get('/project', [App\Http\Controllers\ProjectController::class, 'index'])->name('project');
Route::get('/portfolio', [App\Http\Controllers\ProjectController::class, 'indexView'])->name('portfolio');
Route::get('/create/project', [App\Http\Controllers\ProjectController::class, 'create'])->name('project.create');
Route::post('/store/project', [App\Http\Controllers\ProjectController::class, 'store'])->name('project.store');
Route::get('/edit/project/{id}', [App\Http\Controllers\ProjectController::class, 'edit'])->name('project.edit');
Route::put('/update/project/{id}', [App\Http\Controllers\ProjectController::class, 'update'])->name('project.update');
Route::delete('/delete/project/{id}', [App\Http\Controllers\ProjectController::class, 'delete'])->name('project.delete');
Route::get('/portfolios', [App\Http\Controllers\ProjectController::class, 'indexPortfolio'])->name('portfolio.index');
// CRUD BLOGS

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/create/blog', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
Route::post('/store/blog', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
Route::get('/edit/blog/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
Route::put('/update/blog/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');
Route::delete('/delete/blog/{id}', [App\Http\Controllers\BlogController::class, 'delete'])->name('blog.delete');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
