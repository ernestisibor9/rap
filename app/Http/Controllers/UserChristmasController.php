<?php

namespace App\Http\Controllers;

use App\Models\Christmas;
use App\Models\Minutes;
use Illuminate\Http\Request;

class UserChristmasController extends Controller
{
    // Christmas
    public function ChristmasSelect(){
        $christmas = Minutes::where('minutes_directory', 'christmas')->latest()->get();
        return view('frontend.christmas.christmas_select', compact('christmas'));
    }
    //
    public function ViewPdfChristmas($id){
        $docs = Minutes::findOrFail($id);
        return view('frontend.christmas.christmas_view_pdf', compact('docs'));
    }
    // Full Content
     public function FullContent4($id){
        $contentData = Minutes::findOrFail($id);
        return view('frontend.christmas.christmas_full_content', compact('contentData'));
    }
}