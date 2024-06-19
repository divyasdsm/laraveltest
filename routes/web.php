<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


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

//Route::prefix('admin')->group(function () {

    Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/add-accountant',[AdminController::class,'createAccountant'])->name('admin.create.accountant');
    Route::post('admin/add-accountant',[AdminController::class,'saveAccountant'])->name('admin.save.accountant');
    Route::get('admin/view-accountant',[AdminController::class,'viewAccountant'])->name('admin.view.accountant');
    Route::get('admin/edit-accountant/{id}',[AdminController::class,'editAccountant']);
    Route::get('admin/delete-accountant/{id}',[AdminController::class,'deleteAccountant']);
    Route::get('admin/edit-entry/{id}',[AdminController::class,'editEntry']);
    Route::get('admin/delete-entry/{id}',[AdminController::class,'deleteEntry']);

    Route::get('admin/add-entry',[AdminController::class,'addEntry'])->name('admin.add.entry');
    Route::post('admin/add-entry',[AdminController::class,'saveEntry'])->name('admin.save.entry');
    Route::get('admin/view-entry',[AdminController::class,'viewEntry'])->name('admin.view.entry');
    Route::get('admin/logout',[AdminController::class,'logout'])->name('admin.logout');



    // Add more admin routes here
//});
