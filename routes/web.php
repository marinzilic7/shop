<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('/registerUser',[UserController::class,'registracijaKorisnika']);
Route::post('/loginUser',[UserController::class,'prijavaKorisnika']);
Route::post('/logoutUser',[UserController::class,'odjavaKorisnika']);
Route::post('/deleteUser/{id}',[UserController::class,'izbrisiKorisnika']);
Route::get('/getUser',[UserController::class,'dohvatiKorisnika']);
Route::get('/getUsers',[UserController::class,'dohvatiKorisnike']);
Route::post('/promoteUser/{id}',[UserController::class,'promovirajKorisnika']);

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '^(?!api).*$');
