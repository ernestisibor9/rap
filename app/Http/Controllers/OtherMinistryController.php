<?php

namespace App\Http\Controllers;

use App\Models\Minutes;
use Illuminate\Http\Request;

class OtherMinistryController extends Controller
{
    // Other Ministry Select
    public function OtherMinistrySelect(){
        $otherMinistry = Minutes::where('minutes_directory', 'other ministry programs')->latest()->get();
        return view('frontend.other_ministry_programs.other_ministry_select', compact('otherMinistry'));
    }
    //
    public function ViewPdfOtherMinistry($id){
        $docs = Minutes::findOrFail($id);
        return view('frontend.other_ministry_programs.other_ministry_view_pdf', compact('docs'));
    }
    //
    // Full Content
     public function FullContent5($id){
        $contentData = Minutes::findOrFail($id);
        return view('frontend.other_ministry_programs.other_ministry_full_content', compact('contentData'));
    }
}