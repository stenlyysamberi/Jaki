<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\ModelWisataController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SaldoController;
use App\Http\Controllers\TiketOlaragaController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\VenueController;
use Illuminate\Http\Request;
use App\ModelDaftar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/users',[DaftarController::class,'users']);
Route::post('/user',[DaftarController::class,'singel_user']);//Route untuk get singgel user anroid


Route::post('/register',[DaftarController::class,'store']);//Router untuk register user android
Route::post('/verify',[DaftarController::class,'verify']);//Route untuk verifikasi phone number
Route::post('/login',[DaftarController::class,'login']);//Route untuk login user anroid


Route::post('/user_admin',[DaftarController::class,'store_user_admin']);//route buat user admin
Route::delete('/del_users/{id}',[DaftarController::class,'del_user']);//route buat user admin




// For Tiket Olaraga
Route::post('/t_olaraga',[TiketOlaragaController::class,'store']);
Route::get('/t_olaraga',[TiketOlaragaController::class,'index']);
Route::put('/t_olaraga',[TiketOlaragaController::class,'update']);
Route::delete('/del_olaraga/{id}',[TiketOlaragaController::class,'delete']);
// END

// For Tiket Wisata
Route::post('/t_wisata',[ModelWisataController::class,'store']);
Route::get('/t_wisata',[ModelWisataController::class,'index']);
Route::put('/t_wisata',[ModelWisataController::class,'update']);
Route::delete('/del_wisata/{id}',[ModelWisataController::class,'del_wisata']);
// END


//for get Token
Route::put('/edit_token/{id}',[TokenController::class,'token']);
//end

// For isi Saldo
Route::post('/saldo',[SaldoController::class,'top_up']);
Route::put('/saldo',[SaldoController::class,'update']);
Route::post('/search/{hp}',[SaldoController::class,'search']);
Route::delete('/saldo/{id}',[SaldoController::class,'delete']);
Route::post('/singel_saldo',[SaldoController::class,'single_saldo']);
// END


// news
Route::post('/news',[NewsController::class,'store']);
Route::put('/news',[NewsController::class,'update']);
Route::get('/news',[NewsController::class,'index']);
Route::delete('/news/{id}',[NewsController::class,'delete']);
// END

// venue
Route::post('/venue',[VenueController::class,'store']);
Route::put('/venue',[VenueController::class,'update']);
Route::get('/venue',[VenueController::class,'index']);
Route::delete('/venue/{id}',[VenueController::class,'delete']);
// 

// venue
Route::get('/transaksi',[TransaksiController::class,'transaki']);
Route::put('/venue',[VenueController::class,'update']);
Route::get('/venue',[VenueController::class,'index']);
Route::delete('/venue/{id}',[VenueController::class,'delete']);
// END



