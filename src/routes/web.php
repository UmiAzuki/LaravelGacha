<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\GachaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use resources\views\Actions\Gacha\GachaExecuteAction;

use App\Contracts\IGachaQuery;
use App\Contracts\IGachaService;

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


Route::get('/top', function () {
    return view('top');
});


Route::post('/random', function () {
    GachaExecuteAction::class;

    $randomItem = DB::table('mst_card')->inRandomOrder()->first();

    return view('random', ['item' => $randomItem]);
});

Route::post('/gacha-result', 'App\Http\Controllers\GachaController@execute');