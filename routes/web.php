<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UsersController;

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
Route::get('/anasayfa', function(){
    return view('anasayfa');
});

Route::fallback(function() {
    return " genel hata sayfasi burada olacaktir...";
});

Route::prefix('sayfalar')->group(function() {
    Route::get('/kurumsal', function(){
        return view('kurumsal');
    });
    Route::get('/referanslar', function(){
        return view('referanslar');
    });
    Route::get('/iletisim', function(){
        return view('iletisim');
    });
    
    Route::fallback(function() {
        return "hata sayfasi burada olacaktir...";
    });

});