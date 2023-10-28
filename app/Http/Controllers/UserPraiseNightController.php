<?php

namespace App\Http\Controllers;

use App\Models\Minutes;
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
        $praise_night_one = Minutes::where('praise_night_type', 'praise_night_1')->latest()->get();
        return view('frontend.praise_night.praise_night_1', compact('praise_night_one'));
    }
    // Praise Night Two
    public function PraiseNight2(){
        $praise_night_two = Minutes::where('praise_night_type', 'praise_night_2')->latest()->get();
        return view('frontend.praise_night.praise_night_2', compact('praise_night_two'));
    }
    // Praise Night Three
    public function PraiseNight3(){
        $praise_night_three = Minutes::where('praise_night_type', 'praise_night_3')->latest()->get();
        return view('frontend.praise_night.praise_night_3', compact('praise_night_three'));
    }
    // Praise Night Four
    public function PraiseNight4(){
        $praise_night_four = Minutes::where('praise_night_type', 'praise_night_4')->latest()->get();
        return view('frontend.praise_night.praise_night_4', compact('praise_night_four'));
    }
    // Praise Night Five
    public function PraiseNight5(){
        $praise_night_five = Minutes::where('praise_night_type', 'praise_night_5')->latest()->get();
        return view('frontend.praise_night.praise_night_5', compact('praise_night_five'));
    }
    // Praise Night Six
    public function PraiseNight6(){
        $praise_night_six = Minutes::where('praise_night_type', 'praise_night_6')->latest()->get();
        return view('frontend.praise_night.praise_night_6', compact('praise_night_six'));
    }
    // Praise Night Seven
    public function PraiseNight7(){
        $praise_night_seven = Minutes::where('praise_night_type', 'praise_night_7')->latest()->get();
        return view('frontend.praise_night.praise_night_7', compact('praise_night_seven'));
    }
    // Praise Night Eight
    public function PraiseNight8(){
        $praise_night_eight = Minutes::where('praise_night_type', 'praise_night_8')->latest()->get();
        return view('frontend.praise_night.praise_night_8', compact('praise_night_eight'));
    }
    // Praise Night Nine
    public function PraiseNight9(){
        $praise_night_nine = Minutes::where('praise_night_type', 'praise_night_9')->latest()->get();
        return view('frontend.praise_night.praise_night_9', compact('praise_night_nine'));
    }
    // Praise Night Ten
    public function PraiseNight10(){
        $praise_night_ten = Minutes::where('praise_night_type', 'praise_night_10')->latest()->get();
        return view('frontend.praise_night.praise_night_10', compact('praise_night_ten'));
    }
    // Praise Night Eleven
    public function PraiseNight11(){
        $praise_night_eleven = Minutes::where('praise_night_type', 'praise_night_11')->latest()->get();
        return view('frontend.praise_night.praise_night_11', compact('praise_night_eleven'));
    }
    // Praise Night Twelve
    public function PraiseNight12(){
        $praise_night_twelve = Minutes::where('praise_night_type', 'praise_night_12')->latest()->get();
        return view('frontend.praise_night.praise_night_12', compact('praise_night_twelve'));
    }
     // View Doc
    public function ViewPdf($id){
        $docs = Minutes::findOrFail($id);
        return view('frontend.praise_night.praise_night_view_pdf', compact('docs'));
    }
    // Full Content
     public function FullContent($id){
        $contentData = Minutes::findOrFail($id);
        return view('frontend.praise_night.praise_night_full_content', compact('contentData'));
    }
    
}