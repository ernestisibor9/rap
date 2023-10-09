<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class LeaderController extends Controller
{
    // Leader
    public function AddLeader(){
        return view('admin.admin_leader');
    }

    // 
    public function LeaderStore(Request $request){
        $image = $request->file('photo');
        $filename = date('YmdHi') . $image->getClientOriginalName();
        $image->move(public_path('upload/leader_images'), $filename);
        $save_url = 'upload/leader_images/'.$filename;
        Leader::insert([
            'leader' => $request->leader,
            'photo' => $save_url,
            'created_at' => Carbon::now()
        ]);
        $notification = array(
            'message'=> 'Leader Added successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('manage.leader')->with($notification);
    }
    // Manage Leader
    public function ManageLeader(){
        $leaderData = Leader::latest()->get();
        return view('admin.admin_manage_leader', compact('leaderData'));
    }
    // Edit Leader
    public function EditLeader($id){
        $leaderEdit = Leader::findOrFail($id);
        return view('admin.admin_edit_leader', compact('leaderEdit'));
    }
    // Update Leader
    public function LeaderUpdate(Request $request){
        $leaderUpdate = $request->id;
        
        if($request->file('photo')){
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/leader_images'), $filename);

            Leader::findOrFail($leaderUpdate)->update([
                'leader'=> $request->leader,
                'photo' => $filename,
            ]);
            $notification = array(
            'message'=> 'Leader updated successfully ',
            'alert-type'=>'success'
            );
            return redirect()->route('manage.leader')->with($notification);
        }
        else{
            Leader::findOrFail($leaderUpdate)->update([
                'leader'=> $request->leader,
            ]);
            $notification = array(
            'message'=> 'Leader updated successfully ',
            'alert-type'=>'success'
            );
            return redirect()->route('manage.leader')->with($notification);
        }
    }
    //Delete Leader
    public function DeleteLeader($id){
        $deleteId = Leader::findOrFail($id);
        $photo = $deleteId->photo;
        @unlink($photo);

        Leader::findOrFail($id)->delete();
        $notification = array(
            'message'=> 'Leader deleted successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);

    }
}