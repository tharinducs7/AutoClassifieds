<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use Illuminate\Support\Facades\DB;
use PDF;


class SellerController extends Controller
{
    //

    public function addseller(Request $request){

            $seller = new Seller;

            $seller->sellerName = $request->input('sellerName');
            $seller->contactNumber = $request->input('contactNumber');
            $seller->sellerEmail = $request->input('sellerEmail');
            $seller->country = $request->input('country');
            $seller->joinedDate = $request->input('joinedDate');
            $seller->sellerStatus = $request->input('sellerStatus');

            $seller->save();

            return response()->json(['message'=>$seller],201);
            

    }

    public function getsellers(){

        
        $allSellers = DB::select("select * from sellers");
        //$allSellers = Seller::all();
        //return response()->json(['allsellers'=>$allSellers],200);

        return view('sellers',compact('allSellers'));

    }

    public function downloadAllSellerDetailsPDF(){

        $allSellers = DB::select("select * from sellers");
        $pdf = PDF::loadView('sellers', compact('allSellers'));

        return $pdf->download('allSellerDetails.pdf');

    }

    public function getSinglesellerPDF($id){

        $allSellers = DB::table('sellers')
        ->where('id', $id)
        ->get();

        $pdf = PDF::loadView('sellers', compact('allSellers'));

        return $pdf->download('SingleSellerDetails.pdf');
        
        
    }


}
