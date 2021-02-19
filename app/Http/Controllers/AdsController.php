<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Ads;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AdsController extends Controller
{

    public function getAllAds(){

        $Ad = Ads::get()->toJson(JSON_PRETTY_PRINT);
        return response($Ad, 200);

    }

    public function createAd(Request $request){

        //Check image format
        $input_data = $request->all();

        $validator = Validator::make(
            $input_data, [
            'images.*' => 'required|mimes:jpg,jpeg,png,bmp|max:20000'
            ],[
                'images.*.required' => 'Please upload an image',
                'images.*.mimes' => 'Only jpeg,png and bmp images are allowed',
                'images.*.max' => 'Sorry! Maximum allowed size for an image is 20MB',
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                "message" => "upload failed"
            ], 201);
        }


        if($request->hasfile('images'))
         {
            //Images are saved in this path
            $uploadFolder = 'uploads/images';

            foreach($request->file('images') as $image)
            {
                $name = $image->hashName();
                $path = $image->store($uploadFolder, 'public');
                $data[] = $name;

            }

        }

        //Add data to db
        $Ad = new Ads;
        $Ad->categoryId = $request->categoryId;
        $Ad->brand = $request->brand;
        $Ad->model = $request->model;
        $Ad->year = $request->year;
        $Ad->country = $request->country;
        $Ad->condition = $request->condition;
        $Ad->mileage = $request->mileage;
        $Ad->transmission = $request->transmission;
        $Ad->fuelType = $request->fuelType;
        $Ad->engineCapacity = $request->engineCapacity;
        $Ad->other = $request->other;
        $Ad->location = $request->location;

        $Ad->images = json_encode($data);

        $Ad->title = $request->title;
        $Ad->description = $request->description;
        $Ad->price = $request->price;

        //$Ad->expiery = Carbon::now()->addDays(60);
        $Ad->save();

        return response()->json([
            "message" => "Ad record created"
        ], 201);
    }

    public function getAd($id){

       if(Ads::where('id', $id)->exists()){
           $Ads = Ads::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
           return response($Ads, 200);
       }else{
           return response()->json([
               "message" => "Ad not found"
           ], 404);
       }

    }

    public function updateAd(Request $request, $id){

        if(Ads::where('id', $id)->exists()){
            $Ads = Ads::find($id);

            //Update if exist
            $Ads->categoryId = is_null($request->categoryId ) ? $Ads->categoryId   : $request->categoryId;
            $Ads->brand = is_null($request->brand) ? $Ads->brand: $request->brand;
            $Ads->model = is_null($request->model) ? $Ads->model : $request->model;
            $Ads->year = is_null($request->year) ? $Ads->year : $request->year;
            $Ads->country = is_null($request->country) ? $Ads->country : $request->country;
            $Ads->condition = is_null($request->condition) ? $Ads->condition : $request->condition;
            $Ads->mileage = is_null($request->mileage) ? $Ads->mileage : $request->mileage;
            $Ads->transmission = is_null($request->transmission) ? $Ads->transmission : $request->transmission;
            $Ads->fuelType = is_null($request->fuelType) ? $Ads->fuelType : $request->fuelType ;
            $Ads->engineCapacity = is_null($request->engineCapacity) ? $Ads->engineCapacity : $request->engineCapacity ;
            $Ads->other = is_null($request->other) ? $Ads->other : $request->other;
            $Ads->location = is_null($request->location) ? $Ads->location : $request->location;

            //Upload new Images??
            $Ads->images = is_null($request->images) ? $Ads->images : $request->images;


            
            $Ads->title = is_null($request->title) ? $Ads->title : $request->title ;
            $Ads->description = is_null($request->description) ? $Ads->description : $request->description;
            $Ads->price = is_null($request->price) ? $Ads->price: $request->price;

            $Ads->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);

        }else{
            return response()->json([
                "message" => "Ad not found"
            ], 404);
        }


    }

    public function deleteAd($id){

        if(Ads::where('id', $id)->exists()) {
            $Ads = Ads::find($id);

            //Delete images from disk

            $images = json_decode($Ads->images);
             //Upload path
            $path = "uploads/images/";

            foreach($images as $image){

                //Image link
                $img = $path.$image;
                
                Storage::disk('public')->delete($img);
            }


            $Ads->delete();
    
            return response()->json([
              "message" => "records deleted"
            ], 202);
          } else {
            return response()->json([
              "message" => "Ad not found"
            ], 404);
          }
    }

    public function approveAd($id){
        if(Ads::where('id', $id)->exists()) {
            $Ads = Ads::find($id);
            
            //update
            $Ads->status = 1;
            $Ads->approvedDate = Carbon::now();
            $Ads->expieryDate = Carbon::now()->addDays(60);

            $Ads->save();
            return response()->json([
                "message" => "Ad approved"
              ], 202);
            } else {
              return response()->json([
                "message" => "Ad not found"
              ], 404);     }
    }



    
}
