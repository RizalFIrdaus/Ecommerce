<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/v1/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->name('logoutApi');
});
// Auth
Route::post('/v1/login', [App\Http\Controllers\Api\AuthController::class, 'login'])->name('loginApi');
Route::post('/v1/register', [App\Http\Controllers\Api\AuthController::class, 'register'])->name('registerApi');


Route::get('/v1/home/banners', [App\Http\Controllers\Api\BannerController::class, 'banners']);
Route::get('/v1/home/banners/video', [App\Http\Controllers\Api\HomeController::class, 'getAllVideoBanner']);
Route::get('/v1/home/categories', [App\Http\Controllers\Api\HomeController::class, 'getAllCategory']);
Route::get('/v1/home/brands', [App\Http\Controllers\Api\HomeController::class, 'getAllBrands']);
Route::get('/v1/home/hastag/viral', [App\Http\Controllers\Api\HomeController::class, 'getViralHastag']);
Route::get('/v1/home/hastag/rebahan', [App\Http\Controllers\Api\HomeController::class, 'getRebahanHastag']);
Route::get('/v1/home/hastag/kopiteh', [App\Http\Controllers\Api\HomeController::class, 'getKopiTehHastag']);
Route::get('/v1/home/hastag/rekomendasi', [App\Http\Controllers\Api\HomeController::class, 'getRekomendasiHastag']);
Route::get('/v1/home/hastag/dapur', [App\Http\Controllers\Api\HomeController::class, 'getDapurHastag']);
Route::get('/v1/home/hastag/bundling', [App\Http\Controllers\Api\HomeController::class, 'getBundlingHastag']);
Route::get('/v1/home/hastag/kerajinan', [App\Http\Controllers\Api\HomeController::class, 'getKerajinanHastag']);
Route::get('/v1/home/daerah', [App\Http\Controllers\Api\HomeController::class, 'getAllProvince']);
Route::get('/v1/home/negara', [App\Http\Controllers\Api\HomeController::class, 'getAllCountry']);
Route::get('/v1/home/cargo', [App\Http\Controllers\Api\HomeController::class, 'getAllCargo']);
Route::get('/v1/home/news', [App\Http\Controllers\Api\HomeController::class, 'getAllNews']);
Route::get('/v1/home/address', [App\Http\Controllers\Api\HomeController::class, 'getAddress']);
