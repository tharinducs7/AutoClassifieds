<?php

<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\BuyerRequestsController;
=======

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComplaintController;
>>>>>>> cf551b1b86e9fb74bd2ce2da83c2292785da0a05

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
<<<<<<< HEAD
 
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
=======



Route::apiResource('/category', CategoryController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/complaint',[ComplaintController::class,'create']);
Route::put('/complaint',[ComplaintController::class,'update']);
Route::get('/complaint',[ComplaintController::class,'getall']);
>>>>>>> cf551b1b86e9fb74bd2ce2da83c2292785da0a05
