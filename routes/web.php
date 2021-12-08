<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Extra\MicrosoftWordController;
use App\Http\Controllers\Extra\CalculatorController;
use App\Http\Controllers\Extra\PdfController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//microsoft
Route::get('/', [MicrosoftWordController::class, 'index'])->name('home');
Route::get('/microsoft-word', [MicrosoftWordController::class, 'microsoftWord'])->name('microsoft-word');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//pdf
Route::get('/pdf-document', [PdfController::class, 'pdfDocument'])->name('pdf-document');
Route::get('export/pdf-document', [PdfController::class, 'exportPDF'])->name('export-pdf');

//calculator
Route::get('/calculator', [CalculatorController::class, 'calculator'])->name('calculator');


