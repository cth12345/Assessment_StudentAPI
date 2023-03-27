<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['namespace'=>'App\Http\Controllers'],function(){
    Route::post('register', 'PassportController@register')->name('register');
    Route::post('login', 'PassportController@login')->name('login');
});
Route::middleware('auth:api')->group(function(){
    Route::apiResource('students',StudentController::class);
    Route::post('students-import',[StudentController::class,'importFile']);
    Route::get('students-export',[StudentController::class,'exportFile']);
});


