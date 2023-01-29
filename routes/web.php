<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnnouncementController;
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

Route::get('/', function () {
    return view('homepage');
});
Route::get('/announcementpage', function () {
    return view('announcementpage');
});
Route::get('/announcement', [AnnouncementController::class, 'alist']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(AnnouncementController::class)->group(function () {
    
        //Route::get('/announcement', 'alist');
        Route::get('/create-announcement', 'acreate')->name('create.dashboard');
        Route::post('/create-announcement', 'store');
        Route::post('/announcement/update/{id}', [AnnouncementController::class, 'update'])->name('dashboard.announcementupdate');
        Route::post('/announcement/delete/{id}', [AnnouncementController::class, 'delete'])->name('dashboard.announcement.delete');
        Route::post('/announcement/delete/{id}', [AnnouncementController::class, 'destroy'])->name('dashboard.delete');
        //Route::resource('/list-announcement', 'list');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

