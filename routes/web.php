<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('/registerUser',[UserController::class,'registracijaKorisnika']);
Route::post('/loginUser',[UserController::class,'prijavaKorisnika']);
Route::post('/logoutUser',[UserController::class,'odjavaKorisnika']);
Route::get('/getUser',[UserController::class,'dohvatiKorisnika']);

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '^(?!api).*$');
