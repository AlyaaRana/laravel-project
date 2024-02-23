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


Route::group(["prefix" => "/kelas"], function(){
  Route::get('/all', [KelasController::class, 'index']);
  Route::get('/edit/{kelas}',[KelasController::class, 'edit']);
  Route::put('/update/{kelas}', [KelasController::class, 'update']);
  Route::delete('/delete/{kelas}', [KelasController::class, 'destroy']);
  Route::get('/create', [KelasController::class, 'create']);
  Route::post('/store', [KelasController::class, 'store']);
});


Route::group(["prefix" => "/students"], function(){
  Route::get('/all', [StudentsController::class, 'index']);
  Route::get('/detail/{student}',[StudentsController::class, 'show']);
  Route::get('/{student}/edit',[StudentsController::class, 'edit']);
  Route::put('/update/{student}', [StudentsController::class, 'update'])->name('students.update');
  Route::delete('/delete/{student}', [StudentsController::class, 'destroy']);
  Route::get('/create', [StudentsController::class, 'create']);
  Route::post('/store', [StudentsController::class, 'store']);
});
  

Route::get('/login/index', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/store', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register/index', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register/store', [RegisterController::class, 'store']);

Route::group(["prefix" => "/dashboard"], function(){
  Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth']);
  Route::get('/student', [DashboardController::class, 'student'])->middleware(['auth']);
  Route::get('/kelas', [DashboardController::class, 'kelas'])->middleware(['auth']);
});


