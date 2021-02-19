<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\BuyerRequestsController;

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
 
Route::post('addSeller',[SellerController::class,'addseller']);

Route::post('addBuyerRequest',[BuyerRequestsController::class,'addBuyerRequest']);

Route::get('getallBuyerRequest',[BuyerRequestsController::class,'getallBuyerRequests']);

Route::get('getallBuyerRequestPDF',[BuyerRequestsController::class,'downloadAllBuyerRequestsDetailsPDF']);

Route::get('getSingleBuyerRequestPDF/{id}',[BuyerRequestsController::class,'downloadSingleBuyerRequestsDetailsPDF']);

Route::get('getsellers',[SellerController::class,'getsellers']);

Route::get('download-sellerspdf',[SellerController::class,'downloadAllSellerDetailsPDF']);

Route::get('getSinglesellerPDF/{id}',[SellerController::class,'getSinglesellerPDF']);

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/