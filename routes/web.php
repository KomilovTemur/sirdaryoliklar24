<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('category/{slug}', [MainController::class, 'categoryPosts'])->name('categoryPosts');
Route::get('posts/{slug}', [MainController::class, 'postDetail'])->name('postDetail');
Route::get('contact', [MainController::class, 'contact'])->name('contact');
Route::get('search', [MainController::class, 'search'])->name('search');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('advertising', [MainController::class, 'advertising'])->name('advertising');
Route::get('morePosts',[MainController::class, 'morePosts'])->name('morePosts');



Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){
    // Route::get('dashboard', function () {
    //     return view('admin.dashboard');
    // })->name('dashboard');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::resource('')
    Route::resource('categories', CategoriesController::class);
    Route::resource('posts', PostsController::class);
    Route::resource('tags', TagsController::class);
    Route::resource('ads', AdsController::class);
    Route::resource('addContacts', ContactsController::class);
    Route::post('post-image-upload',[PostsController::class, 'upload'])->name('upload');
});

// languages
Route::get('/lang/{lang}', function($lang){

    session(['lang' => $lang]);
    return back();
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
