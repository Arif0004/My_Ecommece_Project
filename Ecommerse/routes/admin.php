<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::view('test', 'layouts.backend_app');

    // Route::view('login', 'backend.auth.login');
    // Route::view('dashboard', 'backend.dashboard');


    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/all', [CategoryController::class, 'all'])->name('all');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('show');
        Route::post('category', [CategoryController::class, 'store'])->name('store');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('destroy');
        Route::post('/update/{category}', [CategoryController::class, 'update'])->name('update');
    });

     # Sub category

     Route::prefix('sub-cat')->name('sub-cat.')->group(function () {
         Route::get('/',[SubCategoryController::class,'index'])->name('index');
         Route::post('/store',[SubCategoryController::class,'store'])->name('store'); //API
         Route::get('/all',[SubCategoryController::class,'getAllSubCat'])->name('all');
         Route::get('/{id}',[SubCategoryController::class,'view'])->name('view');
         Route::delete('/{category}', [SubCategoryController::class, 'destroy'])->name('destroy');
         Route::post('/update/{id}', [SubCategoryController::class, 'update'])->name('update');



    });

    Route::prefix('product')->name('product.')->group(function () {
        Route::get('/',[ProductController::class,'index'])->name('index');
        Route::post('/store',[ProductController::class, 'store'])->name('store');
        Route::get('/create',[ProductController::class, 'create'])->name('create');
        Route::get('/view/{slug}', [ProductController::class, 'view'])->name('view');
        Route::get('/delete/{slug}', [ProductController::class, 'delete'])->name('delete');
        Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
        Route::get('/categories/{id}', [ProductController::class, 'categories'])->name('categories');

        Route::post('active/{product}', [ProductController::class, 'active'])->name('active');
        Route::post('inActive/{product}', [ProductController::class, 'inActive'])->name('inActive');

        Route::post('update/{product}', [ProductController::class, 'update'])->name('update');

    });

});
