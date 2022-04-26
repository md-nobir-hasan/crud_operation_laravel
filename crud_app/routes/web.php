<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crud_control;

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

Route::get('/', [crud_control::class,'shows']);
Route::get('/add_category', [crud_control::class,'category_page']);
Route::post('/category_insert', [crud_control::class,'insert']);
Route::get('/category_update_page/{id}', [crud_control::class,'update_page']);
Route::put('/update/{id}', [crud_control::class,'update']);
Route::get('/delete/{id}', [crud_control::class,'delete']);
