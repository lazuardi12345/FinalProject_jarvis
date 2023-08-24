<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DivisiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('contents.dashboard');
});

Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/create', [EmployeeController::class, 'create']);
Route::post('/employee', [EmployeeController::class, 'store']);
Route::get('/employee/{id}/detail', [EmployeeController::class, 'show']);
Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit']);
Route::put('/employee/{id}', [EmployeeController::class, 'update']);
Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');

Route::get('/divisions', [DivisiController::class, 'index']);
Route::get('/divisions/create', [DivisiController::class, 'create']);
Route::post('/divisions', [DivisiController::class, 'store']);
