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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/reference', [App\Http\Controllers\ReferenceController::class, 'index'])->name('reference');
Route::get('/create/reference', [App\Http\Controllers\ReferenceController::class, 'create'])->name('reference.create');
Route::post('/store/reference', [App\Http\Controllers\ReferenceController::class, 'store'])->name('reference.store');
Route::get('/edit/reference/{id}', [App\Http\Controllers\ReferenceController::class, 'edit'])->name('reference.edit');
Route::put('/update/reference/{id}', [App\Http\Controllers\ReferenceController::class, 'update'])->name('reference.update');
Route::delete('/delete/reference/{id}', [App\Http\Controllers\ReferenceController::class, 'delete'])->name('reference.delete');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
