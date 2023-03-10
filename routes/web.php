<?php

use App\Http\Controllers\VideoController;
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



Auth::routes();
Route::get('/',[VideoController::class,'list'])->name('list_video');

Route::get('/upload',[VideoController::class,'upload'])->name('upload_video');
 Route::post('/upload/store',[VideoController::class,'store'])->name('upload_store');


