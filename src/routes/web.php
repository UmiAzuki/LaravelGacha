<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/random', function () {
    $randomItem = DB::table('mst_card')->inRandomOrder()->first();

    return view('random', ['item' => $randomItem]);
});

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/top', function () {
    return view('top');
});

Route::post('/gacha/execute', [App\Http\Controllers\TestController::class, 'GachaExecuteAction']) ->name('gea');
