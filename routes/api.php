<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ads', [AdsController::class,'getAllAds']);
Route::get('ads/{id}', [AdsController::class,'getAd']);
Route::post('ads', [AdsController::class,'createAd']);
Route::put('ads/{id}', [AdsController::class,'updateAd']);
Route::delete('ads/{id}', [AdsController::class,'deleteAd']);
Route::put('ads/approve/{id}', [AdsController::class,'approveAd']);


