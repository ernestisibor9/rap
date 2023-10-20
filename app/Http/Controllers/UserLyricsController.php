<?php

namespace App\Http\Controllers;

use App\Models\Lyrics;
use Illuminate\Http\Request;

class UserLyricsController extends Controller
{
    // Lyrics
    public function LyricsSelect(){
        $lyrics = Lyrics::latest()->get();
        return view('frontend.lyrics.lyrics_select', compact('lyrics'));
    }
    // public function SingleLyrics($title){
    //     $lyrics_single = Lyrics::where('title', $title)->latest()->first();
    //     return view('frontend.lyrics.lyrics_select', compact('lyrics_single'));
    // }
    // Full Content
     public function FullContent3($id){
        $contentData = Lyrics::findOrFail($id);
        return view('frontend.lyrics.lyrics_full_content', compact('contentData'));
    }
}