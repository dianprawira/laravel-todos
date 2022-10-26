<?php

use App\Http\Controllers\KuliahController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('kuliah',[KuliahController::class,'tampil']);
Route::get('kuliah-sore',[KuliahController::class,'kuliahSore']);
Route::get('kuliah-pagi/{id}',[KuliahController::class,'kuliahPagi']);
Route::post('kuliah-siang',[KuliahController::class,'kuliahSiang']);


Route::get('tasks',[TaskController::class,'index']);
Route::get('tasks/{id}',[TaskController::class,'show']);
Route::post('tasks/',[TaskController::class,'store']);
Route::delete('tasks/{task}',[TaskController::class,'destroy']);
Route::put('tasks/{id}',[TaskController::class,'update']);


