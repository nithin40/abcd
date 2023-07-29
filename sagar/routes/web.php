<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

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
    return view('form2');


});
Route::post('/insertdata',[RegistrationController::class,'store']);
Route::post('/reg',[RegistrationController::class,'index']);
Route::get('/data',[RegistrationController::class,'fet'])->name('/data/delete');
Route::get('/data/delete/{name}',[RegistrationController::class,'del']);
Route::get('/update/{name}',[RegistrationController::class,'up']);

Route::post('/click',[RegistrationController::class,'upd1']);

