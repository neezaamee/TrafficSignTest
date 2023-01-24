<?php

namespace App\Http\Controllers;

use App\Models\HistoryCto as ModelsCtohistory;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    function historyCTO(){
        $allCTOs = ModelsCtohistory::orderByDesc('dateappointment')->get();
        return view('ctoHistory', ['CTOs' => $allCTOs, 'pageHeading' => 'CTOs Faisalabad']);
    }
    
}
