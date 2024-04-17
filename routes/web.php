<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/home',[HomeController::class,'redirect']);

Route::get('/',[HomeController::class,'index'])->name('home');



Route::get('/post_page',[AdminController::class,'post_page']);

Route::post('/add_post',[AdminController::class,'add_post']);

Route::get('/posts_view',[AdminController::class,'posts_view'])->name('posts_view');


Route::get('/delete_post/{id}',[AdminController::class,'delete_post']);

Route::get('/update_post/{id}',[AdminController::class,'update_post']);

Route::post('update/{id}',[AdminController::class,'update']);

Route::get('accept_post/{id}',[AdminController::class,'accept_post']);

Route::get('reject_post/{id}',[AdminController::class,'reject_post']);

Route::get('/users_views',[AdminController::class,'users_views']);

Route::get('/textImonials_admin',[AdminController::class,'textImonials_admin']);

Route::get('/delete_opinion/{id}',[AdminController::class,'delete_opinion']);

Route::get('/emails',[AdminController::class,'emails']);

Route::get('emailNotification/{id}',[AdminController::class,'emailNotification']);

Route::post('sendEmail/{id}',[AdminController::class,'sendEmail']);



Route::get('delete_user/{id}',[HomeController::class,'delete_user']);

Route::get('/post_details/{id}',[HomeController::class,'post_details']);

Route::get('post_from_user',[HomeController::class,'post_from_user'])->middleware('auth');

Route::post('/add_post',[HomeController::class,'add_post'])->middleware('auth');

Route::get('my_posts',[HomeController::class,'my_posts']);

Route::get('delete_post/{id}',[HomeController::class,'delete_post']);

Route::get('/update_post_user/{id}',[HomeController::class,'update_post']);

Route::post('/edit_post/{id}',[HomeController::class,'edit_post']);


Route::get('textImonials',[HomeController::class,'TextImonials']);


Route::get('my_opinion',[HomeController::class,'my_opinion']);

Route::post('add_opinion',[HomeController::class,'add_opinion']);


Route::post('talkUs',[HomeController::class,'talkUs']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
