<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use App\Models\Lyrics;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class LyricsController extends Controller
{
    // Lyrics
    public function AddLyrics(){
        return view('admin.admin_lyrics');
    }

    // Store Lyrics
    public function LyricsStore(Request $request){
       $request->validate([
            'title' => 'required',
            'lyrics' => 'required',
        ]);

        Lyrics::insert([
            'title' => $request->title,
            'lyrics' => $request->lyrics,
            'created_at' => Carbon::now()
        ]);
        $notification = array(
            'message'=> 'Lyrics Added successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('admin.manage.lyrics')->with($notification);
    }
    // Route to manage lyrics
    public function LyricsManage(){
        $lyrics = Lyrics::latest()->get();
        return view('admin.admin_manage_lyrics', compact('lyrics'));
    }
    // Edit Lyrics
    public function LyricsEdit($id){
        $lyricsEdit = Lyrics::findOrFail($id);
        return view('admin.admin_edit_lyrics', compact('lyricsEdit'));
    }

    public function LyricsUpdate(Request $request){
        $lyricsUpdate = $request->id;
        
        Lyrics::findOrFail($lyricsUpdate)->update([
            'title'=> $request->title,
            'lyrics' => $request->lyrics
        ]);
        $notification = array(
        'message'=> 'Lyrics updated successfully',
        'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
        
    }
    // Delete Lyrics
    public function LyricsDelete($id){

        Lyrics::findOrFail($id)->delete();
        $notification = array(
            'message'=> 'Christmas service deleted successfully',
            'alert-type'=>'success'
        );
       return redirect()->back()->with($notification);
    }

    // Lyrics content
    public function LyricsContent($id){
        $contentData = Lyrics::findOrFail($id);
        return view('admin.all_content6', compact('contentData'));
    }

}