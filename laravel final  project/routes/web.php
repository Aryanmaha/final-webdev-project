<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[App\Http\Controllers\Frontend\FrontendController::class,'index']);
Route::get('category',[App\Http\Controllers\Frontend\FrontendController::class,'category']);
Route::get('about',[App\Http\Controllers\Frontend\FrontendController::class,'about']);
Route::get('contact',[App\Http\Controllers\Frontend\FrontendController::class,'contact']);
Route::get('category/{category_slug}',[App\Http\Controllers\Frontend\FrontendController::class,'viewCategoryPost']);
Route::get('category/{category_slug}/{post_slug}',[App\Http\Controllers\Frontend\FrontendController::class,'viewPost']);

//comment system 
Route::post('comments',[App\Http\Controllers\Frontend\CommentController::class,'store']);
Route::Post('delete-comment',[App\Http\Controllers\Frontend\CommentController::class,'destroy']);

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){

    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::get('category',[App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category',[App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('add-category',[App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

    Route::get('post', [App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('add-post', [App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('add-post', [App\Http\Controllers\Admin\PostController::class, 'store']);
    Route::get('post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::put('update-post/{post_id}',[App\Http\Controllers\Admin\PostController::class, 'update']);
    Route::get('delete-post/{post_id}',[App\Http\Controllers\Admin\PostController::class, 'destroy']);

    Route::get('users', [App\Http\Controllers\Admin\UserController::Class,'index']);
    Route::get('users/{user_id}',[App\Http\Controllers\Admin\UserController::Class,'edit']);
    Route::put('update-user/{user_id}',[App\Http\Controllers\Admin\UserController::Class,'update']);
});