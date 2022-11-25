<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Mnadamos a llamar al controller que se utiliza
//use App\Http\Controllers\Practica5;
//use App\Http\Controllers\Practica6;
use App\Http\Controllers\Api\GroupsController;
use App\Http\Controllers\Api\StudentsController;
use App\Http\Controllers\Api\SubjectsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//Route::get('mirutaapiG',[SubjectsController::class, 'index'])->name('subject.store');
// Route::post('mirutaapiP',[SubjectsController::class, 'index'])->name('subject');
// Route::put('mirutaapiPU',[SubjectsController::class, 'index'])->name('subject');
// Route::delete('mirutaapiD',[SubjectsController::class, 'index'])->name('subject');


//
//Route::Apiresource('subjects',SubjectsController::class);
//Route::Apiresource('groups',GroupsController::class);
//Route::Apiresource('students',StudentsController::class);

//
Route::Apiresource('groups',GroupsController::class);
Route::Apiresource('students',StudentsController::class);
Route::Apiresource('subjects',SubjectsController::class);

//

//Route::resource('students', StudentsController::class);
//Route::resource('subjects', SubjectsController::class);
//Route::resource('groups', GroupsController::class);

