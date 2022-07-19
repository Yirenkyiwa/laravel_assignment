<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('users');
});

// Route::get('/list-users', function () {
//     return view('viewusers');
// });


Route::get('list-users', [UserController::class,'index']);
Route::get('store-form', [UserController::class,'create']);
Route::post('store-form',[UserController::class,'store']);
Route::get('delete/{id}', [UserController::class,'destroy']);
Route::get('edit/{id}', [UserController::class,'edit']);
Route::post('edit', [UserController::class,'update']);

