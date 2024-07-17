<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\JobDetailController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobsController;

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/job',[\App\Http\Controllers\Frontend\JobsController::class,'index'])->name('job');
Route::get('/Job-detail',[JobDetailController::class,'index'])->name('job-detail');
Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/create-job', [JobsController::class, 'create'])->name('create-job');
    Route::get('/list-jobs', [JobsController::class, 'index'])->name('list-jobs');



});
Route::resource('jobs', JobsController::class);
Route::get('/login',[\App\Http\Controllers\Admin\AuthController::class,'index'])->name('login');
