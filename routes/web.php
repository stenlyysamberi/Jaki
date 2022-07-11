<?php

use App\Http\Controllers\DaftarController;
use App\Token;
use Illuminate\Support\Facades\Route;
use Twilio\TwiML\Voice\Room;

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
    return view('pages.beranda');
})->middleware('auth');



Route::get('news', function () {
    return view('pages.news',[
        "title1" => 'Jaki',
        "title2" => 'Consumer',
        "title3" => 'Account'
    ]);
})->middleware('auth');



Route::get('users',function(){
    return view('pages.consumer',[
        "title1" => 'Jaki',
        "title2" => 'Consumer',
        "title3" => 'Account'
    ]);
})->middleware('auth');


Route::get('login',function(){
    return view('auth.login',[
        "title1" => 'Jaki | login',
        "title2" => 'Tiket',
        "title3" => 'Olaraga'
    ]);
})->middleware('guest')->name('login');

Route::post('login',[DaftarController::class,'login_admin'])->middleware('guest');
Route::get('logout',[DaftarController::class,'logout'])->middleware('auth');


Route::get('t_olaraga',function(){
    return view('pages.tiketolaraga',[
        "title1" => 'Jaki',
        "title2" => 'Tiket',
        "title3" => 'Olaraga'
    ]);
})->middleware('auth');

Route::get('venue',function(){
    return view('pages.venue',[
        "title1" => 'Jaki',
        "title2" => 'Tiket',
        "title3" => 'Venue'
    ]);
})->middleware('auth');

Route::get('t_wisata',function(){
    return view('pages.tiketwisata',[
        "title1" => 'Jaki',
        "title2" => 'Tiket',
        "title3" => 'Wisata'
    ]);
})->middleware('auth');

Route::get('token',function(){
    return view('pages.token',[
        "title1" => 'Jaki',
        "title2" => 'Create',
        "title3" => 'Token',
        "data"   => Token::find(1)
    ]);
})->middleware('auth');

Route::get('saldo',function(){
    return view('pages.saldo',[
        "title1" => 'Jaki',
        "title2" => 'Toko',
        "title3" => 'Top Up'
    ]);
})->middleware('auth');


