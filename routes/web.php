<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoEmail;
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

// routes/web.php



Route::post('/enviar-email', [ContatoEmail::class, 'enviarEmail'])->name('enviar-email');

Route::get('/', function () {
    return view('welcome');
});