<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    function all(){
        $allComplaints = Complaint::all();
        return $allComplaints;
    }
    function new(Request $req){
        /* $incomingData = $req -> validate([
            'name' => 'required',
            'cnic' => 'required',
            'email' => 'required',

        ]); */
        $date=date("dmy");
        $randomNum=mt_rand(0,1000);
        $trackingID = $date."-CTPF-".$randomNum;
        //$totalComplains = Complaint::count();
        $incomingData = $req ->all();
        
        Complaint::create($incomingData + ['status' => 'being processed..', 'trackingid' => $trackingID]);

        //return view('ComplaintBox', ['pageHeading' => 'Complaint Registration', 'Status' => 'Success', 'TrackingID' => $trackingID]);
        //return redirect('/ComplaintBox')->with('pageHeading', 'Complaint Registration', 'message', 'Success', 'TrackingID', $trackingID);
        return redirect()->back()->with('message', $trackingID);
    }
    function status(Request $req){
            $trackingID = $req -> trackingid;
            $Complaint = Complaint::where('trackingid', $trackingID)->first();
            return view('trackComplaint', ['pageHeading' => 'Complaint Status', 'Complaint' => $Complaint]);        
    }
    function update(){

    }
    function delete(){

    }
}

