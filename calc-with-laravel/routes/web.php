<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CalculatorController;

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
    return 'welcome to simple calculator, go to */public/calc';
});

Route::get('calc', [CalculatorController::class, 'index']);
Route::get('calc/sum/{arg1}/{arg2}', [CalculatorController::class, 'sum']);
Route::get('calc/multiply/{arg1}/{arg2}', [CalculatorController::class, 'multiply']);
Route::get('calc/divide/{arg1}/{arg2}', [CalculatorController::class, 'divide']);
Route::get('calc/subtract/{arg}/{arg2}', [CalculatorController::class, 'subtract']);

//divide


