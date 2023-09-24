<?php
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggajianController;
use App\Http\Controllers\TujanganController;
use App\Http\Controllers\UserProfileController;
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
// Route::get('/', function () {
//     return view('contents.dashboard');
// });



Route::name('login.')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');
});

// Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin'], function(){

// Route::get('/', [HomeController::class, 'index'])->name('/');

// Route::name('employees')->group(function () {
//     Route::get('/employee', [EmployeeController::class, 'index']);
//     Route::get('/employee/create', [EmployeeController::class, 'create']);
//     Route::post('/employee', [EmployeeController::class, 'store']);
//     Route::get('/employee/{id}/detail', [EmployeeController::class, 'show']);
//     Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit']);
//     Route::put('/employee/{id}', [EmployeeController::class, 'update']);
//     Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
// });

// Route::name('divisions')->group(function () {
//     Route::get('/divisions', [DivisiController::class, 'index']);
//     Route::get('/divisions/create', [DivisiController::class, 'create']);
//     Route::post('/divisions', [DivisiController::class, 'store']);
//     Route::get('/divisions/{id}/edit', [DivisiController::class, 'edit']);
//     Route::put('/divisions/{id}', [DivisiController::class, 'update']);
//     Route::delete('/divisions/{id}', [DivisiController::class, 'destroy'])->name('divisi.destroy');
// });

// Route::name('penggajians')->group(function () {
//     Route::get('/penggajians', [PenggajianController::class, 'index']);
//     Route::get('/penggajians/create', [PenggajianController::class, 'create']);
//     Route::post('/penggajians', [PenggajianController::class, 'store']);
//     Route::get('/penggajians/{id}/edit', [PenggajianController::class, 'edit']);
//     Route::put('/penggajians/{id}', [PenggajianController::class, 'update']);
//     Route::delete('/penggajians/{id}', [PenggajianController::class, 'destroy'])->name('penggajian.destroy');
// });


// Route::name('tunjangans')->group(function () {
//     Route::get('/tunjangans', [TujanganController::class, 'index']);
//     Route::get('/tunjangans/create', [TujanganController::class, 'create']);
//     Route::post('/tunjangans', [TujanganController::class, 'store']);
//     Route::get('/tunjangans/{id}/edit', [TujanganController::class, 'edit']);
//     Route::put('/tunjangans/{id}', [TujanganController::class, 'update']);
//     Route::delete('/tunjangans/{id}', [TujanganController::class, 'destroy'])->name('tunjangan.destroy');
// });



// Route::middleware(['auth'])->group(function () {
//     Route::get('/userProfile', [UserProfileController::class, 'show']);
// });

Route::middleware(['checkRole:employee'])->group(function () {
    Route::get('/userProfile', [UserProfileController::class, 'show']);
    Route::get('/', [HomeController::class, 'index'])->name('/');
});

Route::middleware(['checkRole:admin|pic'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('/');

    Route::name('employees.')->group(function () {
        Route::get('/employee', [EmployeeController::class, 'index']);
        Route::get('/employee/create', [EmployeeController::class, 'create']);
        Route::post('/employee', [EmployeeController::class, 'store']);
        Route::get('/employee/{id}/detail', [EmployeeController::class, 'show']);
        Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit']);
        Route::put('/employee/{id}', [EmployeeController::class, 'update']);
        Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
    });
    
    Route::name('divisions.')->group(function () {
        Route::get('/divisions', [DivisiController::class, 'index']);
        Route::get('/divisions/create', [DivisiController::class, 'create']);
        Route::post('/divisions', [DivisiController::class, 'store']);
        Route::get('/divisions/{id}/edit', [DivisiController::class, 'edit']);
        Route::put('/divisions/{id}', [DivisiController::class, 'update']);
        Route::delete('/divisions/{id}', [DivisiController::class, 'destroy'])->name('divisi.destroy');
    });
    
    Route::name('penggajians.')->group(function () {
        Route::get('/penggajians', [PenggajianController::class, 'index']);
        Route::get('/penggajians/create', [PenggajianController::class, 'create']);
        Route::post('/penggajians', [PenggajianController::class, 'store']);
        Route::get('/penggajians/{id}/edit', [PenggajianController::class, 'edit']);
        Route::put('/penggajians/{id}', [PenggajianController::class, 'update']);
        Route::delete('/penggajians/{id}', [PenggajianController::class, 'destroy'])->name('penggajian.destroy');
    });
    
    
    Route::name('tunjangans.')->group(function () {
        Route::get('/tunjangans', [TujanganController::class, 'index']);
        Route::get('/tunjangans/create', [TujanganController::class, 'create']);
        Route::post('/tunjangans', [TujanganController::class, 'store']);
        Route::get('/tunjangans/{id}/edit', [TujanganController::class, 'edit']);
        Route::put('/tunjangans/{id}', [TujanganController::class, 'update']);
        Route::delete('/tunjangans/{id}', [TujanganController::class, 'destroy'])->name('tunjangan.destroy');
    });
});

// Route::middleware(['checkRole:pic'])->group(function () {

// });


// });

