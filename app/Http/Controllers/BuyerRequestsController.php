<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuyerRequests;
use Illuminate\Support\Facades\DB;
use PDF;


class BuyerRequestsController extends Controller
{
    //

    public function addBuyerRequest(Request $request){

        $brequest = new BuyerRequests;

        $brequest->vehicle = $request->input('vehicle');
        $brequest->category = $request->input('category');
        $brequest->fuel = $request->input('fuel');
        $brequest->registrationYear = $request->input('registrationYear');
        $brequest->mileage = $request->input('mileage');
        $brequest->Description = $request->input('Description');
        $brequest->OffersSent = $request->input('OffersSent');

        $brequest->save();
        return response()->json(['message'=>$brequest],201);

    }

    public function getallBuyerRequests(){

        
        $allRequests = DB::select("select * from buyer_requests");

        return view('buyerrequests',compact('allRequests'));

    }

    public function downloadAllBuyerRequestsDetailsPDF(){

        $allRequests = DB::select("select * from buyer_requests");
        $pdf = PDF::loadView('buyerrequests', compact('allRequests'));

        return $pdf->download('allBuyerRequestsDetails.pdf');

    }

    public function downloadSingleBuyerRequestsDetailsPDF($id){

        $allRequests = DB::table('buyer_requests')
        ->where('id', $id)
        ->get();

        $pdf = PDF::loadView('buyerrequests', compact('allRequests'));

        return $pdf->download('SingleBuyerRequestDetails.pdf');


    }


}
