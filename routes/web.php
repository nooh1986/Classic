<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DesignController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CustomerController;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('customers' , CustomerController::class);

Route::resource('categories' , CategoryController::class);

Route::resource('designs' , DesignController::class);
