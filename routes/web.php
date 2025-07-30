<?php

use App\Http\Controllers\ChiangmaiController;
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Test2Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/test", [TestController::class, 'index']);
Route::get("/test/showdata", [TestController::class, 'showData']);

Route::get("/test2", [Test2Controller::class, 'page1']);

Route::get("/chiangmai", [ChiangmaiController::class, 'index']);
Route::get("/chiangmai/showdata", [ChiangmaiController::class, 'showdata'])->name('chiangmai.showdata');

Route::get("/demo", [DemoController::class, 'index']);
