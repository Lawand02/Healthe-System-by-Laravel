<?php

use App\Http\Controllers\HealtheController;
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
    return view('welcome');
});

Route::resource('healthe','HealtheController');

Route::get('healthe/restore/{id}',[HealtheController::class,'restore'])->name('healthe.restore');

Route::get('healthe/softdelete/{id}',[HealtheController::class,'forceDelete'])->name('healthe.delete');
Route::get('healthe/view/{id}',[HealtheController::class,'view'])->name('healthe.view');

