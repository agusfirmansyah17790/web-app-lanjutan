<?php

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

Route::get("/about-me", function() {
    return "nama saya <b>agus firmansyah</b>";
});

Route::get('/', function () {
    return view('view-12');
});

Route::get("/jurusan", function () {
    return "<b>JURUSAN : S1 TEKNIK INFORMATIKA</b>";
});

Route::get('/nim', function () {
    return "NIM 1811102441005</b>";
});

Route::get('/semester', function () {
    return "<b>SEMESTER :  5</b>";
});

Route::get('/angkatan', function () {
    return "<b>ANGKATAN 2018</b>";
});

use App\Http\Controllers\HomeController;

Route::get('/test1/view1', [HomeController::class, "test1"]);

Route::get('/test2/view2', [HomeController::class, "test2"]);

Route::get('/test3/view3', [HomeController::class, "test3"]);

Route::get('/test4/view4', [HomeController::class, "test4"]);

Route::get('/test5/view5', [HomeController::class, "test5"]);

use App\Http\Controllers\AboutController;

Route::get('/test6/view6', [AboutController::class, "test6"]);

Route::get('/test7/view7', [AboutController::class, "test7"]);

Route::get('/test8/view8', [AboutController::class, "test8"]);

Route::get('/test9/view9', [AboutController::class, "test9"]);

Route::get('/test10/view10', [AboutController::class, "test10"]);

Route::get("/tema/bootstrap", [HomeController::class, "index"]);

