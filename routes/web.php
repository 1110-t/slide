<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlideController;
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

Route::get('admin/register',[SlideController::class, 'register']);
Route::post('admin/register',[SlideController::class, 'register']);
Route::post('admin/update',[SlideController::class, 'update']);
Route::get('admin/',[SlideController::class, 'index']);
Route::get('/',[SlideController::class, 'show']);
