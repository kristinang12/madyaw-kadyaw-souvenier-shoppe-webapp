<?php


use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;



Route::middleware('auth', 'is_admin')->group(function(){

            Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
            Route::get('/list',[AdminController::class, 'list'])->name('list.dashboard');
            Route::get('/create-user',[AdminController::class, 'create']);
            Route::post('/create-user',[AdminController::class, 'store']);
            Route::get('/edit-user/{id}', [AdminController::class, 'edit'])->name('edit.dashboard');
            Route::post('/edit-user/{id}',[AdminController::class, 'update']);
            Route::delete('/delete-user/{id}',[AdminController::class, 'destroy']);
        });

