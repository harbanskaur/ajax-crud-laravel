<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
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
Route::get('/form',[AjaxController::class,'index']);
Route::post('/form_submit',[AjaxController::class,'form_submit']);
Route::post('/delete_record', [AjaxController::class,'deleteRecord']);
Route::get('/get_record', [AjaxController::class,'getRecord']);
Route::post('/update_record', [AjaxController::class,'updateRecord']);