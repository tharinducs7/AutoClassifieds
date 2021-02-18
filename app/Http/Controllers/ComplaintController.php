<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class ComplaintController extends Controller
{
    public function create( Request $request)
    {
        $complaint = new Complaint(); 
        $complaint-> reported_by = $request->input('reported_by');
        $complaint-> accused = $request->input('accused');
        $complaint-> desc = $request->input('desc');

        $complaint->save();
        error_log('Model saved');
        return response()->json($complaint);
    }

    public function update(Request $request){
        
        $complaint = Complaint::find($request->input('id')); 
        $complaint->update(['completed' => true]);
        error_log('Complaint status updated');

    }

    public function getall(){
        return response()->json(Complaint::all());
        error_log('Showing all complaints');
    }
}
