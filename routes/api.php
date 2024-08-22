<?php

use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('student', StudentController::class);
Route::get('/student/search', [StudentController::class, 'Search'])->name('students.search');
Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('students.update');