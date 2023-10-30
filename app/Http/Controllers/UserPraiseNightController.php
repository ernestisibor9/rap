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
    // Praise Night Thirteen
    public function PraiseNight13(){
        $praise_night_thirteen = Minutes::where('praise_night_type', 'praise_night_13')->latest()->get();
        return view('frontend.praise_night.praise_night_13', compact('praise_night_thirteen'));
    }
    // Praise Night Fourteen
    public function PraiseNight14(){
        $praise_night_fourteen = Minutes::where('praise_night_type', 'praise_night_14')->latest()->get();
        return view('frontend.praise_night.praise_night_14', compact('praise_night_fourteen'));
    }
    // Praise Night Fifteen
    public function PraiseNight15(){
        $praise_night_fifteen = Minutes::where('praise_night_type', 'praise_night_15')->latest()->get();
        return view('frontend.praise_night.praise_night_15', compact('praise_night_fifteen'));
    }
    // Praise Night Sixteen
    public function PraiseNight16(){
        $praise_night_sixteen = Minutes::where('praise_night_type', 'praise_night_16')->latest()->get();
        return view('frontend.praise_night.praise_night_16', compact('praise_night_sixteen'));
    }
    // Praise Night Seventeen
    public function PraiseNight17(){
        $praise_night_seventeen = Minutes::where('praise_night_type', 'praise_night_17')->latest()->get();
        return view('frontend.praise_night.praise_night_17', compact('praise_night_seventeen'));
    }
    // Praise Night Eighteen
    public function PraiseNight18(){
        $praise_night_eighteen = Minutes::where('praise_night_type', 'praise_night_18')->latest()->get();
        return view('frontend.praise_night.praise_night_18', compact('praise_night_eighteen'));
    }
    // Praise Night Nineteen
    public function PraiseNight19(){
        $praise_night_nineteen = Minutes::where('praise_night_type', 'praise_night_19')->latest()->get();
        return view('frontend.praise_night.praise_night_19', compact('praise_night_nineteen'));
    }
    // Praise Night Twenty
    public function PraiseNight20(){
        $praise_night_twenty = Minutes::where('praise_night_type', 'praise_night_20')->latest()->get();
        return view('frontend.praise_night.praise_night_20', compact('praise_night_twenty'));
    }
    // Praise Night Twenty_one
    public function PraiseNight21(){
        $praise_night_twenty_one = Minutes::where('praise_night_type', 'praise_night_21')->latest()->get();
        return view('frontend.praise_night.praise_night_21', compact('praise_night_twenty_one'));
    }
    // Praise Night Twenty_two
    public function PraiseNight22(){
        $praise_night_twenty_two = Minutes::where('praise_night_type', 'praise_night_22')->latest()->get();
        return view('frontend.praise_night.praise_night_22', compact('praise_night_twenty_two'));
    }
    // Praise Night Twenty_three
    public function PraiseNight23(){
        $praise_night_twenty_three = Minutes::where('praise_night_type', 'praise_night_23')->latest()->get();
        return view('frontend.praise_night.praise_night_23', compact('praise_night_twenty_three'));
    }
    // Praise Night Twenty_four
    public function PraiseNight24(){
        $praise_night_twenty_four = Minutes::where('praise_night_type', 'praise_night_24')->latest()->get();
        return view('frontend.praise_night.praise_night_24', compact('praise_night_twenty_four'));
    }
    // Praise Night Twenty_five
    public function PraiseNight25(){
        $praise_night_twenty_five = Minutes::where('praise_night_type', 'praise_night_25')->latest()->get();
        return view('frontend.praise_night.praise_night_25', compact('praise_night_twenty_five'));
    }
    // Praise Night Twenty_six
    public function PraiseNight26(){
        $praise_night_twenty_six = Minutes::where('praise_night_type', 'praise_night_26')->latest()->get();
        return view('frontend.praise_night.praise_night_26', compact('praise_night_twenty_six'));
    }
    // Praise Night Twenty_seven
    public function PraiseNight27(){
        $praise_night_twenty_seven = Minutes::where('praise_night_type', 'praise_night_27')->latest()->get();
        return view('frontend.praise_night.praise_night_27', compact('praise_night_twenty_seven'));
    }
    // Praise Night Twenty_eight
    public function PraiseNight28(){
        $praise_night_twenty_eight = Minutes::where('praise_night_type', 'praise_night_28')->latest()->get();
        return view('frontend.praise_night.praise_night_28', compact('praise_night_twenty_eight'));
    }
    // Praise Night Twenty_nine
    public function PraiseNight29(){
        $praise_night_twenty_nine = Minutes::where('praise_night_type', 'praise_night_29')->latest()->get();
        return view('frontend.praise_night.praise_night_29', compact('praise_night_twenty_nine'));
    }
    // Praise Night Thirty
    public function PraiseNight30(){
        $praise_night_twenty_nine = Minutes::where('praise_night_type', 'praise_night_30')->latest()->get();
        return view('frontend.praise_night.praise_night_30', compact('praise_night_thirty'));
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