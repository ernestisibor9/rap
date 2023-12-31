<?php

namespace App\Http\Controllers;

use App\Models\HealingStream;
use App\Models\Minutes;
use App\Models\Year;
use Illuminate\Http\Request;

class UserHealingStreamController extends Controller
{
    //
    // Select Healing Stream
    public function HealingStreamSelect(){
        $year = Year::get();
        return view('frontend.healing_stream.healing_stream_select', compact('year'));
    }
    // Healing Stream 2020
    public function HealingStream2020(){
        $healing_stream_2020 = Minutes::where('year', '2020')->latest()->get();
        return view('frontend.healing_stream.healing_stream_2020', compact('healing_stream_2020'));
    }
    // Healing Stream 2021
    public function HealingStream2021(){
        $healing_stream_2021 = Minutes::where('year', '2021')->latest()->get();
        return view('frontend.healing_stream.healing_stream_2021', compact('healing_stream_2021'));
    }
    // Healing Stream 2022
    public function HealingStream2022(){
        $healing_stream_2022 = Minutes::where('year', '2022')->latest()->get();
        return view('frontend.healing_stream.healing_stream_2022', compact('healing_stream_2022'));
    }
    // Healing Stream 2023
    public function HealingStream2023(){
        $healing_stream_2023 = Minutes::where('year', '2023')->latest()->get();
        return view('frontend.healing_stream.healing_stream_2023', compact('healing_stream_2023'));
    }
    // Healing Stream 2024
    public function HealingStream2024(){
        $healing_stream_2024 = Minutes::where('year', '2024')->latest()->get();
        return view('frontend.healing_stream.healing_stream_2024', compact('healing_stream_2024'));
    }
    // Healing Stream 2025
    public function HealingStream2025(){
        $healing_stream_2025 = Minutes::where('year', '2025')->latest()->get();
        return view('frontend.healing_stream.healing_stream_2025', compact('healing_stream_2025'));
    }
    // Healing Stream 2026
    public function HealingStream2026(){
        $healing_stream_2026 = Minutes::where('year', '2026')->latest()->get();
        return view('frontend.healing_stream.healing_stream_2026', compact('healing_stream_2026'));
    }
    // Healing Stream 2027
    public function HealingStream2027(){
        $healing_stream_2027 = Minutes::where('year', '2027')->latest()->get();
        return view('frontend.healing_stream.healing_stream_2027', compact('healing_stream_2027'));
    }
    // Healing Stream 2028
    public function HealingStream2028(){
        $healing_stream_2028 = Minutes::where('year', '2028')->latest()->get();
        return view('frontend.healing_stream.healing_stream_2028', compact('healing_stream_2028'));
    }
    // Healing Stream 2029
    public function HealingStream2029(){
        $healing_stream_2029 = Minutes::where('year', '2029')->latest()->get();
        return view('frontend.healing_stream.healing_stream_2029', compact('healing_stream_2029'));
    }
    // healing Stream Month
    public function HealingStreamMonth(){
        $healing_stream_month = HealingStream::latest()->get();
        return view('frontend.healing_stream.healing_stream_month', compact('healing_stream_month'));
    }
    // March
    public function HealingStreamMarch(){
        $healing_stream_march = HealingStream::where('healing_stream', 'healing_stream_march')->latest()->get();
        return view('frontend.healing_stream.healing_stream_march', compact('healing_stream_march'));
    }
    // July
    public function HealingStreamJuly(){
        $healing_stream_july = HealingStream::where('healing_stream', 'healing_stream_july')->latest()->get();
        return view('frontend.healing_stream.healing_stream_july', compact('healing_stream_july'));
    }
    // October
    public function HealingStreamOctober(){
        $healing_stream_october = HealingStream::where('healing_stream', 'healing_stream_october')->latest()->get();
        return view('frontend.healing_stream.healing_stream_october', compact('healing_stream_october'));
    }
    // View Doc
    public function ViewPdf2($id){
        $docs = HealingStream::findOrFail($id);
        return view('frontend.healing_stream.healing_stream_view_pdf', compact('docs'));
    }
    // Full Content
     public function FullContent2($id){
        $contentData = Minutes::findOrFail($id);
        return view('frontend.healing_stream.healing_stream_full_content', compact('contentData'));
    }

}