<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Auth;

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect()->route('companies.index');
    });
    Route::resource('companies', CompanyController::class);
    Route::resource('employees', EmployeeController::class);
});
