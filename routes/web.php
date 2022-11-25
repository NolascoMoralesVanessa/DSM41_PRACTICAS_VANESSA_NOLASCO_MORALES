<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Practica5;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SubjectsController;

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

Route::get('/', function () {
    return view('welcome');
});
//Ruta resource
//Route::resource('resource',Practica5::class);
// Route::get('mirutaapiG',[SubjectsController::class, 'index'])->name('subject.store');
// Route::post('mirutaapiP',[SubjectsController::class, 'index'])->name('subject');
// Route::put('mirutaapiPU',[SubjectsController::class, 'index'])->name('subject');
// Route::delete('mirutaapiD',[SubjectsController::class, 'index'])->name('subject');

Route::resource('groups',GroupsController::class);
Route::resource('subjects',SubjectsController::class);
Route::resource('students',StudentsController::class);
