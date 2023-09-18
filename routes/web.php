<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminSliderController;
use App\Http\Controllers\AdminAirdropController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');


Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');;


Route::prefix('admin')->group(function () {
    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])
            ->name('categories.index')
            ->middleware(['auth']);
//
        Route::get('/create', [CategoryController::class, 'create'])
            ->name('categories.create')
            ->middleware(['auth']);;
//
        Route::post('/store', [CategoryController::class, 'store'])
            ->name('categories.store')
            ->middleware(['auth']);
//
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])
            ->name('categories.edit')
            ->middleware(['auth']);
//
        Route::post('/update/{id}', [CategoryController::class, 'update'])
            ->name('categories.update')
            ->middleware(['auth']);
//
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])
            ->name('categories.delete')
            ->middleware(['auth']);
    });
    Route::prefix('menus')->group(function () {
        Route::get('/',[MenuController::class, 'index'])
            ->name('menus.index')
            ->middleware(['auth']);
        Route::get('/create', [MenuController::class, 'create'])
            ->name('menus.create')
            ->middleware(['auth']);
        Route::post('/store', [MenuController::class, 'store'])
            ->name('menus.store')
            ->middleware(['auth']);
        Route::get('/edit/{id}',[MenuController::class, 'edit'])
            ->name('menus.edit')
            ->middleware(['auth']);
        Route::post('/update/{id}',[MenuController::class, 'update'])
            ->name('menus.update')
            ->middleware(['auth']);
        Route::get('/delete/{id}',[MenuController::class, 'delete'])
            ->name('menus.delete')
            ->middleware(['auth']);
    });
    Route::prefix('product')->group(function () {
        Route::get('/',[AdminProductController::class, 'index'])
            ->name('product.index')
            ->middleware(['auth']);
        Route::get('/create', [AdminProductController::class, 'create'])
            ->name('product.create')
            ->middleware(['auth']);
        Route::post('/store', [AdminProductController::class, 'store'])
            ->name('product.store')
            ->middleware(['auth']);
        Route::get('/edit/{id}',[AdminProductController::class, 'edit'])
            ->name('product.edit')
            ->middleware(['auth']);
        Route::post('/update/{id}',[AdminProductController::class, 'update'])
            ->name('product.update')
            ->middleware(['auth']);
        Route::get('/delete/{id}',[AdminProductController::class, 'delete'])
            ->name('product.delete')
            ->middleware(['auth']);
    });
    Route::prefix('slider')->group(function () {
        Route::get('/',[AdminSliderController::class, 'index'])
            ->name('slider.index')
            ->middleware(['auth']);
        Route::get('/create', [AdminSliderController::class, 'create'])
            ->name('slider.create')
            ->middleware(['auth']);
        Route::post('/store', [AdminSliderController::class, 'store'])
            ->name('slider.store')
            ->middleware(['auth']);
        Route::get('/edit/{id}',[AdminSliderController::class, 'edit'])
            ->name('slider.edit')
            ->middleware(['auth']);
        Route::post('/update/{id}',[AdminSliderController::class, 'update'])
            ->name('slider.update')
            ->middleware(['auth']);
        Route::get('/delete/{id}',[AdminSliderController::class, 'delete'])
            ->name('slider.delete')
            ->middleware(['auth']);
    });

    Route::prefix('airdrop')->group(function () {
        Route::get('/',[AdminAirdropController::class, 'index'])
            ->name('airdrop.index')
            ->middleware(['auth']);
//        Route::get('/create', [AdminSliderController::class, 'create'])
//            ->name('slider.create')
//            ->middleware(['auth']);
//        Route::post('/store', [AdminSliderController::class, 'store'])
//            ->name('slider.store')
//            ->middleware(['auth']);
//        Route::get('/edit/{id}',[AdminSliderController::class, 'edit'])
//            ->name('slider.edit')
//            ->middleware(['auth']);
//        Route::post('/update/{id}',[AdminSliderController::class, 'update'])
//            ->name('slider.update')
//            ->middleware(['auth']);
//        Route::get('/delete/{id}',[AdminSliderController::class, 'delete'])
//            ->name('slider.delete')
//            ->middleware(['auth']);
    });

});
require __DIR__.'/auth.php';
