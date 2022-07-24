<?php

use App\Http\Controllers\PdfController;
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

Route::get('/login', function () {
    return view('autenticar.entrar');
});
Route::get('/logintwo', function () {
    return view('autenticar.entrartwo');
});
Route::get('/home', function () {
    return view('dashboard.home');
});

Route::get('/graphs', [PdfController::class, 'graphs'] );  //'PdfController@graphs'
Route::get('/graphs-pdf', [PdfController::class, 'graphPdf']); //'PdfController@graphPdf'
