<?php

namespace App\Http\Controllers;

use App\Models\HistoryCto as ModelsCtohistory;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    function historyCTO(){
        $allCTOs = ModelsCtohistory::orderByDesc('dateappointment')->get();
        return view('ctoHistory', ['CTOs' => $allCTOs, 'pageHeading' => 'CTOs Faisalabad']);
    }
    function signTestUr(){
        $Questions = Question::all();
        $Answers = Answer::all();
        $data = ['pageHeading' => 'Sign Test in Urdu', 'qHeading' => 'سوال نمبر'];
        return view('signTest',['data' => $data, 'Questions' => $Questions, 'Answers'=> $Answers]);

    }
    function signTestEn(){
        $Questions = Question::all();
        $Answers = Answer::all();
        $data = ['pageHeading' => 'Sign Test in English', 'qHeading' => 'Question No'];
        return view('signTest',['data' => $data, 'Questions' => $Questions, 'Answers'=> $Answers]);


    }
    function signTest(Request $request, $lang){
        /* if($request->is('Sign-Test/ur')){
            return $this->signTestUr();
        }elseif($request->is('Sign-Test/en')){
            return $this->signTestEn();
        }else{
            dd($request->path().' is not a valid path');
        } */
        if(ucFirst($lang)=='Ur'){
            return $this->signTestUr();
        }elseif(ucFirst($lang)=='En'){
            return $this->signTestEn();
        }else{
            //dd($request->path().' is not a valid path');
            echo $request->path()." is not a valid path";
        }

    }
}
