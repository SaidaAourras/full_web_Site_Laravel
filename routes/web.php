<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Models\Reference;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Project;

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
Route::get('/home', function () {
    $categories = Category::all();
    $projects = Project::all();
    $references = Reference::all();
    $blogs = Blog::latest()->paginate(3);
    return view('index')->with([
        'categories' => $categories,
        'projects' => $projects,
        'blogs' => $blogs,
        'references' => $references
    ]);
});

Route::get('/solutions', function () {
    $references = Reference::all();
    return view('solution')->with([
        'references' => $references
    ]);
});


//home page
Route::get('/about', function () {
    $references = Reference::all();
    return view('about')->with([
        'references' => $references
    ]);
});


Route::get('/detailsProjet/{title}', [App\Http\Controllers\ProjectController::class, 'show'])->name('showProject');
Route::get('/blog/{title}', [App\Http\Controllers\BlogController::class, 'show'])->name('blogProjet');

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

Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('blogs');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'indexView'])->name('blog');
Route::get('/create/blog', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
Route::post('/store/blog', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
Route::get('/edit/blog/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
Route::put('/update/blog/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');
Route::delete('/delete/blog/{id}', [App\Http\Controllers\BlogController::class, 'delete'])->name('blog.delete');

//Contact
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'indexView']);
Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/store/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.msg');
Route::delete('/delete/contact/{id}', [App\Http\Controllers\ContactController::class, 'delete'])->name('contact.delete');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});