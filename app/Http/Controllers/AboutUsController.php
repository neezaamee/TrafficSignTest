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
    function signTestUr(){
        $data = ['pageHeading' => 'Sign Test in Urdu', 'qNum' => '1', 'qImg' => 'trafficsigns.png', 'qTxt' => 'تصویر میں ٹریفک کے نشان کا کیا مطلب ہے؟', 'opt1' => '1', 'opt2' => '1', 'opt3' => '1', 'opt4' => '1', 'btnTxt' => '1'  ];
        return view('signTest',['data' => $data]);

    }
    function signTestEn(){
        $data = ['pageHeading' => 'Sign Test in English', 'qNum' => '1', 'qImg' => '1', 'qTxt' => '1', 'opt1' => '1', 'opt2' => '1', 'opt3' => '1', 'opt4' => '1', 'btnTxt' => '1'  ];
        return view('signTest',['data' => $data]);

    }
}
