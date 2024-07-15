<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\JobsController;
use App\Http\Controllers\Frontend\JobDetailController;
use App\Http\Controllers\Admin\DashboardController;


Route::get('/',[HomeController::class,'index'])->name('index');


Route::get('/jobs',[JobsController::class,'index'])->name('jobs');


Route::get('/Job-detail',[JobDetailController::class,'index'])->name('job-detail');
Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index']);

});
