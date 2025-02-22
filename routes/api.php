<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('auth')->group(function () {
    Route::controller(AuthController::class)->name('auth.')->group(function () {
        Route::post('/login', 'login')->name('login');
        Route::delete('/logout', 'logout')->name('logout')->middleware('auth:sanctum');
    });
});
Route::prefix('books')->group(function () {
    Route::controller(BookController::class)->middleware(['auth:sanctum',])->name('books.')->group(function () {
        Route::get('', 'index')->name('index');
        Route::post('/post', 'store')->name('store')->middleware('Create');
        Route::get('/show/{id}', 'show')->name('show');
        Route::put('/update/{id}', 'update')->name('update')->middleware('Create');
        Route::delete('/delete/{id}', 'delete')->name('delete')->middleware('Delete');
    });
});

// Route::prefix('api')->group(function () {
//     Route::controller(OrderController::class)->middleware('id_admin')->group(function () {
//         Route::get('/orders/{id}', 'show')->middleware(['is_editor','is_viewer']);
//         Route::post('/orders', 'store');
//         Route::put('/orders', 'put')->middleware('is_editor');
//         Route::delete('/orders', 'delete');
//     });
// });
