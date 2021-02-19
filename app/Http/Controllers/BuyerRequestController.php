<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuyerReq;
use Carbon\Carbon;
class BuyerRequestController extends Controller
{
    public function createBuyerRequest(Request $request){
        $buyer = new BuyerReq;
        $expDate = Carbon::now()->addDays(60);
        $buyer->title = $request->title;
        $buyer->price = $request->price;
        $buyer->model_Year = $request->model_Year;
        $buyer->description = $request->description;
        $buyer->category_Id = $request->category_Id;
        $buyer->exp_Date = $expDate;
        $buyer->save();

        return response()->json([
            "message"=>"Requested Subbmitedd"
        ],200);
    }
    public function displayAllRequest(){
        $request = BuyerReq::get()->toJson(JSON_PRETTY_PRINT);
        return response($request,200);
    }
    public function displayRequestById($id){
        if(BuyerReq::where('id',$id)->exists()){
            $request = BuyerReq::where('id',$id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($request,200);
        }
        else{
            return response()->json([
                "message"=>"Request Not Found"
            ],404);
        }
    }
    public function acceptRequest($id){
        if(BuyerReq::where('id',$id)->exists()){
            $request = BuyerReq::find($id);
            $status = "accept";
            if(strcmp("pending",$request->status)==0){
                $request = BuyerReq::find($id);
                 $request->status = $status;
                 $request->save();

            return response()->json([
                "message"=>"Request Accepted"
            ]);
            }
            else{
                return response()->json([
                    "message"=>"Already Take action"
                ]);
            }
            
    
        }
        else{
            return response()->json([
                "message"=>"Request Not Found"
            ],404);
        }
    }
    public function rejectRequest($id,Request $remark){
        if(BuyerReq::where('id',$id)->exists()){
            $status = "reject";
            $request = BuyerReq::find($id);
            if(strcmp("pending",$request->status)==0){
                $request->status = $status;
                $request->remark = is_null($remark->remark) ? $request->remark : $remark->remark;
                $request->save();
                return response()->json([
                    "message"=>"Request Rejected"
                ]);
            }
            else{
                return response()->json([
                    "message"=>"Already Take action"
                ]);
            }
           
           
        }
        else{
            return response()->json([
                "message"=>"Request Not Found"
            ],404);
        }
    }
}
