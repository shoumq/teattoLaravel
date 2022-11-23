<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);
Route::get('/category/{category}', [\App\Http\Controllers\MainController::class, 'category']);
Route::get('/categories', [\App\Http\Controllers\MainController::class, 'categories'])->name("categories");
Route::get('/product/{product}', [\App\Http\Controllers\MainController::class, 'product']);

Route::get('/admin', [\App\Http\Controllers\MainController::class, 'admin']);
Route::get('/succes', [\App\Http\Controllers\MainController::class, 'succes']);
Route::get('/sales', [\App\Http\Controllers\MainController::class, 'sales'])->name("sales");
Route::get('/reg', [\App\Http\Controllers\MainController::class, 'reg'])->name("reg");


Route::post('/buy/submit', [\App\Http\Controllers\MainController::class, 'BSubmit'])
    ->name('BSubmit');
Route::post('/price-list/submit', [\App\Http\Controllers\MainController::class, 'PLSubmit'])
    ->name('PLSubmit');
Route::get('/search', [\App\Http\Controllers\MainController::class, 'search'])
    ->name("search");
Route::get('/saved', [App\Http\Controllers\MainController::class, 'saved'])
    ->name('saved');

Route::post('/price-list/submit', [\App\Http\Controllers\MainController::class, 'PLSubmit'])
    ->name('PLSubmit');

Route::post('/buy/submit', [\App\Http\Controllers\MainController::class, 'BSubmit'])
    ->name('BSubmit');

Route::get('/succes', [\App\Http\Controllers\MainController::class, 'succes']);

//  Admin
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin']);
Route::get('/admin/products', [\App\Http\Controllers\AdminController::class, 'adminProducts']);
Route::post('/admin/product/submit/{product}', [\App\Http\Controllers\AdminController::class, 'PRSubmitAdmin'])
    ->name("PRSubmitAdmin");
Route::post('/admin/product/add', [\App\Http\Controllers\AdminController::class, 'addProduct'])
    ->name("addProduct");
Route::post('/admin/product/del/{product}', [\App\Http\Controllers\AdminController::class, 'PRDelAdmin'])
    ->name("PRDelAdmin");

Route::get('/admin/general', [\App\Http\Controllers\AdminController::class, 'adminGeneral'])->name("adminGeneral");
Route::get('/admin/category', [\App\Http\Controllers\AdminController::class, 'adminCategory'])->name("adminCategory");
Route::get('/admin/vacancy', [\App\Http\Controllers\AdminController::class, 'adminVacancy'])->name("adminVacancy");
Route::get('/admin/about', [\App\Http\Controllers\AdminController::class, 'adminAbout'])->name("adminAbout");
Route::get('/admin/news', [\App\Http\Controllers\AdminController::class, 'adminNews'])->name("adminNews");
Route::get('/admin/users', [\App\Http\Controllers\AdminController::class, 'adminUsers'])->name("adminUsers");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
