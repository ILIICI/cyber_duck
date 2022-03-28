<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeAndCompanyListController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/home', 'middleware' => ['is_admin']], function(){

    Route::get('', [HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => '/company'], function(){
        Route::get('/', [CompanyController::class, 'index'])->name('company');
        Route::post('/add', [CompanyController::class, 'store'])->name('add-company');
        Route::get('/delete/{id}', [CompanyController::class, 'destroy'])->name('delete-company');
        Route::post('/update/{id}', [CompanyController::class, 'update'])->name('update-company');
    });

    Route::group(['prefix' => '/employee'], function(){
        Route::get('/', [EmployeeController::class, 'index'])->name('employee');
        Route::post('/add', [EmployeeController::class, 'store'])->name('add-employee');
        Route::get('/delete/{id}', [EmployeeController::class, 'destroy'])->name('delete-employee');
        Route::post('/update/{id}', [EmployeeController::class, 'update'])->name('update-employee');
    });

    Route::group(['prefix' => '/list'], function(){
        Route::get('/', [EmployeeAndCompanyListController::class, 'index'])->name('show-list');
        Route::post('/update/{id}', [EmployeeAndCompanyListController::class, 'update'])->name('update-list');
    });
});

Auth::routes(['register' => false]);