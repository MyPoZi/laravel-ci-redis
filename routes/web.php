<?php

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

// Setテスト
Route::get('/redis_test/set', function() {
    $result = Illuminate\Support\Facades\Redis::set("test", "redisの接続テストです。");
    dd($result);
});

// Getテスト
Route::get('/redis_test/get', function() {
    $result = Illuminate\Support\Facades\Redis::get("test");
    dd($result);
});
