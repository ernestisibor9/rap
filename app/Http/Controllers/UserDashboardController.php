<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    // Minute Dashboard
    public function UserDirectory(){
        return view('frontend.user_directory');
    }
}