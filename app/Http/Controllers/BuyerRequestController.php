<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuyerReq;
use Carbon\Carbon;

/**
 * NOTE: 2 imports required for Query builder 
 * by: Esala
*/
use Illuminate\Support\Facades\DB;
use PDF;


class BuyerRequestController extends Controller
{
    public function createBuyerRequest(Request $request){
        $buyer = new BuyerReq;
        
        $buyer->title = $request->title;
        $buyer->price = $request->price;
        $buyer->model_Year = $request->model_Year;
        $buyer->description = $request->description;
        $buyer->category_Id = $request->category_Id;
        $buyer->user_Id = $request->user_Id;
      
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
                 $request->action_Date = Carbon::now();
                 $request->exp_Date = Carbon::now()->addDays(60);
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
                $request->action_Date = Carbon::now();
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

    /**
     * 
     * NOTE: PDF generating functions implemented by Esala
     * 
     */
    public function downloadAllBuyerRequestsDetailsPDF(){

        $allRequests = DB::select("select * from buyer_reqs");
        $pdf = PDF::loadView('buyerrequests', compact('allRequests'));

        return $pdf->download('allBuyerRequestsDetails.pdf');

    }

    public function downloadSingleBuyerRequestsDetailsPDF($id){

        $allRequests = DB::table('buyer_reqs')
        ->where('id', $id)
        ->get();

        $pdf = PDF::loadView('buyerrequests', compact('allRequests'));

        return $pdf->download('SingleBuyerRequestDetails.pdf');


    }

}
