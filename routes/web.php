<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
    return view('index');
});


Route::get('/',[StudentController::class,'add_student']);
Route::get('/edit_student',[StudentController::class,'edit_student']);
Route::get('/show_student',[StudentController::class,'show_student']);

Route::post('/add_edit',[StudentController::class,'add_student_data']);
Route::get('/show-details',[StudentController::class,'show_details']);
Route::get('/fetch',[StudentController::class,'fetch_details']);
Route::get('/delete',[StudentController::class,'delete']);
Route::get("/fetchteacher",[StudentController::class,'fetch_teachers']);
