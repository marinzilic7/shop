<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\ProductController;

Route::post('/registerUser',[UserController::class,'registracijaKorisnika']);
Route::post('/loginUser',[UserController::class,'prijavaKorisnika']);
Route::post('/logoutUser',[UserController::class,'odjavaKorisnika']);
Route::post('/deleteUser/{id}',[UserController::class,'izbrisiKorisnika']);
Route::get('/getUser',[UserController::class,'dohvatiKorisnika']);
Route::get('/getUsers',[UserController::class,'dohvatiKorisnike']);
Route::post('/promoteUser/{id}',[UserController::class,'promovirajKorisnika']);


Route::post('/addCategory',[CategoryController::class,'dodajKategoriju']);
Route::get('/getCategory',[CategoryController::class,'dohvatiKategorije']);
Route::post('deleteCategory/{id}',[CategoryController::class,'izbrisiKategoriju']);

Route::get('/getGender',[GenderController::class,'dohvatiGender']);


Route::post('/addProduct',[ProductController::class,'dodajProizvod']);
Route::get('/getProduct',[ProductController::class,'dohvatiProizvode']);
Route::post('/deleteProduct/{id}',[ProductController::class,'izbrisiProizvod']);

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '^(?!api).*$');
