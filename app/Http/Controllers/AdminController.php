<?php

namespace App\Http\Controllers;

use App\Models\HealingStream;
use App\Models\Leader;
use App\Models\PraiseNight;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Admin Dashboard
    public function AdminDashboard(){
				$data = HealingStream::latest()->get();
        return view('admin.index', compact('data'));
    }
    // Admin Logout
    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    // Admin Login
    public function AdminLogin(){
        return view('admin.admin_login');
    }
    // AdminProfile
    public function AdminProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile', compact('profileData'));
    }
    // Admin Profile Store
    public function AdminProfileStore(Request $request){
			 $request->validate([
            'photo' => 'required|mimes:jpeg, png, pdf, jpg, gif'
        ]);
			$id = Auth::user()->id;
			$data = User::find($id);
			$data->name = $request->name;
			$data->email = $request->email;

			if($request->file('photo')){
				$file =	$request->file('photo'); 
				@unlink(public_path('upload/admin_images/'.$data->photo));
				$filename = date('YmdHi').$file->getClientOriginalExtension();
				$file->move(public_path('upload/admin_images'), $filename);
				$data['photo'] = $filename;
			}
			$data->save();

			$notification = array(
				'message'=> 'Admin Profile Updated Successfully',
				'alert-type'=>'success'
			);

			return redirect()->back()->with($notification);
    }
    // Admin Change Password Page
    public function AdminChangePassword(){
		$id = Auth::user()->id;
		$profileData = User::find($id);
		return view('admin.admin_change_password', compact('profileData'));
		}
		
    // Admin Update Password
    		public function AdminProfileUpdate(Request $request){
			// Validation
			$request->validate([
				'old_password'=>'required',
				'new_password'=> 'required|confirmed',
			]);

			if(!Hash::check($request->old_password, auth::user()->password)){
				$notification = array(
				'message'=> 'Old Password Does not Match',
				'alert-type'=>'error'
				);
				return back()->with($notification);
			}

			// Update the new password
			User::whereId(auth::user()->id)->update([
				'password'=> Hash::make($request->new_password)
			]);
			
			$notification = array(
				'message'=> 'Password Changed Successfully',
				'alert-type'=>'success'
			);
			return redirect()->back()->with($notification);
		}
}