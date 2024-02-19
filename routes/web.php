<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\Students;
use App\Http\Controllers\StudentsController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});

// Route::get('/hello', function () {
//     return "Hello World!";
// });

Route::get('/home', function () {
    return view('home', [
        "title"  => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Alyaa Rana",
        "kelas" => "11 PPLG 2",
        "foto" => "img/alyaa.jpg"
    ]);
});

// Route::group(["prefix" => "/student"], function(){
//     Route::get('/all', [StudentsController::class, 'index']);
//     Route::get('/detail/{student}',[StudentsController::class, 'show']);
//     Route::get('/edit/{student}',[StudentsController::class, 'edit']);
//     Route::put('/update/{student}', [StudentsController::class, 'update']);
//     Route::delete('/delete/{student}', [StudentsController::class, 'destroy']);
//     Route::get('/create', [StudentsController::class, 'create']);
//     Route::post('/store', [StudentsController::class, 'store']);
// });

Route::get('/students/all', [StudentsController::class, 'index']);
Route::get('/students/detail/{student}',[StudentsController::class, 'show']);
Route::get('/students/edit/{student}',[StudentsController::class, 'edit']);
Route::put('/students/update/{student}', [StudentsController::class, 'update']);
Route::delete('/students/delete/{student}', [StudentsController::class, 'destroy']);
Route::get('/students/create', [StudentsController::class, 'create']);
Route::post('/students/store', [StudentsController::class, 'store']);


Route::get('/kelas/all', [KelasController::class, 'index']);
Route::get('/kelas/edit/{kelas}',[KelasController::class, 'edit']);
Route::put('/kelas/update/{kelas}', [KelasController::class, 'update']);
Route::delete('/kelas/delete/{kelas}', [KelasController::class, 'destroy']);
Route::get('/kelas/create', [KelasController::class, 'create']);
Route::post('/kelas/store', [KelasController::class, 'store']);

Route::get('/login/index', [LoginController::class, 'index']);
Route::post('/login/store', [LoginController::class, 'store']);
Route::delete('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register/index', [RegisterController::class, 'index']);
Route::post('/register/store', [RegisterController::class, 'store']);

Route::get('/dashboard/all', [DashboardController::class, 'index'])->middleware(['auth']);
Route::get('/dashboard/student', [DashboardController::class, 'student']);
Route::get('/dashboard/kelas', [DashboardController::class, 'kelas']);

