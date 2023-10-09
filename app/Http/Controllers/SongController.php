<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use App\Models\Title;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class SongController extends Controller
{
        // Add Song Route
    public function AddSong(){
        return view ('admin.admin_song');
    }
    // Store Song
     public function StoreSong(Request $request){
        Title::insert([
            'title' => $request->title,
            'created_at' => Carbon::now()
        ]);
        $notification = array(
            'message'=> 'Song Added successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    // Manage Songs
    public function ManageSong(){
        $songData = Title::latest()->get();
        return view('admin.admin_manage_song', compact('songData'));
    }
    // Edit Manage Song
    public function EditManageSong($id){
        $songView = Title::latest()->get();
        $songEdit = Title::findOrFail($id);
        return view('admin.admin_edit_song', compact('songEdit', 'songView'));
    }
    // Update Song
    public function UpdateSong(Request $request){
        $songUpdate = $request->id;
        
        Title::findOrFail($songUpdate)->update([
            'title'=> $request->title,
        ]);
        $notification = array(
        'message'=> 'Song updated successfully',
        'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);       
    }
    // Delete Song
    public function DeleteManageSong($id){

        Title::findOrFail($id)->delete();
        $notification = array(
            'message'=> 'Song title deleted successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);

    }
}