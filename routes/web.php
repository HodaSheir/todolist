<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/',[TaskController::class,'index']);
Route::post('/addTask' , [TaskController::class,'addTask']);
Route::post('/completeTask' , [TaskController::class,'completeTask']);
Route::get('/deleteTask/{id}', [TaskController::class,'deleteTask']);
Route::post('/returnTask' , [TaskController::class,'returnTask']);
Route::get('/getTask/{id}',[TaskController::class,'getTask']);
Route::post('/updateTask',[TaskController::class,'updateTask']);

