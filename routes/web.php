<?php

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
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

Route::get('/hai', function(){
    return view('hai', [
        "title" => "balqis page",
        "nama" => "balqis FA"
    ]);
})->name('hai.blade');

Route::get('/kamu', function(){
    return view('hai.kamu', [
        "title" => "kamu page",
        "nama" => "kamu.."
    ]);
})->name('hai.kamu');

Route::get('/html-encod', function(Request $request){
    return view('html-encod', ["nama" => $request->input('nama')]);
});
