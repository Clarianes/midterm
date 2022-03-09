<?php

use App\Http\Controllers\EmployeeController;
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

Route::resource('employee', EmployeeController::class)->except('update', 'destroy');

Route::post('/employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');

Route::get('/employee/{id}/destroy', [EmployeeController::class, 'destroy'])->name('employee.destroy');
