<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        // 'tests/test'にアクセスするとここの処理が実行される
        // 下記の場合、viewのtests/test.blade.phpの処理が実行される
        return view('hello');
    }
}
