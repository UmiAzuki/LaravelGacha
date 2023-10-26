<?php

namespace App\Http\Controllers;

use app\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function named_route()
    {
        // 'tests/test'にアクセスするとここの処理が実行される
        // 下記の場合、viewのtests/test.blade.phpの処理が実行される
        return view('gacha-result');
    }
}
