<?php

namespace App\Http\Controllers;

use App\Models\PraiseNight;
use Illuminate\Http\Request;

class UserPraiseNightController extends Controller
{
    // Select Praise Night
    public function PraiseNightSelect(){
        $praise_night = PraiseNight::latest()->get();
        return view('frontend.praise_night.praise_night_select', compact('praise_night'));
    }
    // Praise Night One
    public function PraiseNight1(){
        $praise_night_one = PraiseNight::where('praise_night', 'praise_night_1')->latest()->get();
        return view('frontend.praise_night.praise_night_1', compact('praise_night_one'));
    }
    // Praise Night Two
    public function PraiseNight2(){
        $praise_night_two = PraiseNight::where('praise_night', 'praise_night_2')->latest()->get();
        return view('frontend.praise_night.praise_night_2', compact('praise_night_two'));
    }
    // Praise Night Three
    public function PraiseNight3(){
        $praise_night_three = PraiseNight::where('praise_night', 'praise_night_3')->latest()->get();
        return view('frontend.praise_night.praise_night_3', compact('praise_night_three'));
    }
    // Praise Night Four
    public function PraiseNight4(){
        $praise_night_four = PraiseNight::where('praise_night', 'praise_night_4')->latest()->get();
        return view('frontend.praise_night.praise_night_4', compact('praise_night_four'));
    }
    // Praise Night Five
    public function PraiseNight5(){
        $praise_night_five = PraiseNight::where('praise_night', 'praise_night_5')->latest()->get();
        return view('frontend.praise_night.praise_night_5', compact('praise_night_five'));
    }
    // Praise Night Six
    public function PraiseNight6(){
        $praise_night_six = PraiseNight::where('praise_night', 'praise_night_6')->latest()->get();
        return view('frontend.praise_night.praise_night_6', compact('praise_night_six'));
    }
    // Praise Night Seven
    public function PraiseNight7(){
        $praise_night_seven = PraiseNight::where('praise_night', 'praise_night_7')->latest()->get();
        return view('frontend.praise_night.praise_night_7', compact('praise_night_seven'));
    }
    // Praise Night Eight
    public function PraiseNight8(){
        $praise_night_eight = PraiseNight::where('praise_night', 'praise_night_8')->latest()->get();
        return view('frontend.praise_night.praise_night_8', compact('praise_night_eight'));
    }
    // Praise Night Nine
    public function PraiseNight9(){
        $praise_night_nine = PraiseNight::where('praise_night', 'praise_night_9')->latest()->get();
        return view('frontend.praise_night.praise_night_9', compact('praise_night_nine'));
    }
    // Praise Night Ten
    public function PraiseNight10(){
        $praise_night_ten = PraiseNight::where('praise_night', 'praise_night_10')->latest()->get();
        return view('frontend.praise_night.praise_night_10', compact('praise_night_ten'));
    }
    // Praise Night Eleven
    public function PraiseNight11(){
        $praise_night_eleven = PraiseNight::where('praise_night', 'praise_night_11')->latest()->get();
        return view('frontend.praise_night.praise_night_11', compact('praise_night_eleven'));
    }
     // View Doc
    public function ViewPdf($id){
        $docs = PraiseNight::findOrFail($id);
        return view('frontend.praise_night.praise_night_view_pdf', compact('docs'));
    }
    // Full Content
     public function FullContent($id){
        $contentData = PraiseNight::findOrFail($id);
        return view('frontend.praise_night.praise_night_full_content', compact('contentData'));
    }
    
}