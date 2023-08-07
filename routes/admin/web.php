<?php

use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\SellServiceController;
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


// Route::get('/index', function () {
//     return view('backend.index');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => '/admin', 'middleware' => ['auth']], function () {

    Route::resource('service', ServiceController::class);
    Route::resource('sellservice', SellServiceController::class);
    Route::resource('expense', ExpenseController::class);


    //General Setting Section
    Route::get('/generalsettings', [GeneralSettingController::class, 'index'])->name('generalsetting.index');
    Route::post('update/generalsettings/{id}', [GeneralSettingController::class, 'update'])->name('generalsetting.update');

    Route::get('my-profile', [ProfileController::class, 'index'])->name('my-profile');
    Route::post('admin/profile/update/{id}', [ProfileController::class, 'profile_update'])->name('admin.profile.update');
    Route::post('admin/update/{id}', [ProfileController::class, 'update'])->name('admin.update');
    Route::post('reset/password', [ProfileController::class, 'reset_password'])->name('reset-password');
});
