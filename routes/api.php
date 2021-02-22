<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;


use App\Http\Controllers\SellerController;
//use App\Http\Controllers\BuyerRequestsController;

use App\Models\Category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\BuyerRequestController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ads', [AdsController::class,'getAllAds']);
Route::get('ads/{id}', [AdsController::class,'getAd']);
Route::post('ads', [AdsController::class,'createAd']);
Route::put('ads/{id}', [AdsController::class,'updateAd']);
Route::delete('ads/{id}', [AdsController::class,'deleteAd']);
Route::put('ads/approve/{id}', [AdsController::class,'approveAd']);
 
//Route::post('addSeller',[SellerController::class,'addseller']);
//Route::post('addBuyerRequest',[BuyerRequestController::class,'addBuyerRequest']);
Route::get('getallBuyerRequest',[BuyerRequestController::class,'getallBuyerRequests']);
Route::get('getallBuyerRequestPDF',[BuyerRequestController::class,'downloadAllBuyerRequestsDetailsPDF']);
Route::get('getSingleBuyerRequestPDF/{id}',[BuyerRequestController::class,'downloadSingleBuyerRequestsDetailsPDF']);
Route::get('getsellers',[SellerController::class,'getsellers']);
Route::get('download-sellerspdf',[SellerController::class,'downloadAllSellerDetailsPDF']);
Route::get('getSinglesellerPDF/{id}',[SellerController::class,'getSinglesellerPDF']);

Route::apiResource('/category', CategoryController::class);

Route::post('/complaint',[ComplaintController::class,'create']);
Route::put('/complaint',[ComplaintController::class,'update']);
Route::get('/complaint',[ComplaintController::class,'getall']);

Route::post('/buyer_req',[BuyerRequestController::class,'createBuyerRequest']);
Route::get('/admin/Request',[BuyerRequestController::class,'displayAllRequest']);
Route::get('/admin/Request/{id}',[BuyerRequestController::class,'displayRequestById']);
Route::Put('/admin/Request/Reject/{id}',[BuyerRequestController::class,'rejectRequest']);
Route::Put('/admin/Request/Accept/{id}',[BuyerRequestController::class,'acceptRequest']);
