<?php

use Illuminate\Support\Facades\Route;
use App\Models\Students;
use App\Http\Controllers\StudentsController;
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
//     Route::get('/students/all', [StudentsController::class, 'index']);
//     Route::get('/students/detail/{student}',[StudentsController::class, 'show']);
//     Route::get('/students/edit/{student}',[StudentsController::class, 'edit']);
//     Route::put('/students/update/{student}', [StudentsController::class, 'update']);
//     Route::get('/students/delete/{student}', [StudentsController::class, 'destroy']);
//     Route::get('/students/create', [StudentsController::class, 'create']);
//     Route::post('/students/store', [StudentsController::class, 'store']);
// });

Route::get('/students/all', [StudentsController::class, 'index']);
Route::get('/students/detail/{student}',[StudentsController::class, 'show']);
Route::get('/students/edit/{student}',[StudentsController::class, 'edit']);
Route::put('/students/update/{student}', [StudentsController::class, 'update']);
Route::get('/students/delete/{student}', [StudentsController::class, 'destroy']);
Route::get('/students/create', [StudentsController::class, 'create']);
Route::post('/students/add', [StudentsController::class, 'add']);