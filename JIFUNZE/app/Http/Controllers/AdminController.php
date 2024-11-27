<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function admindashview(){
        
        return view('admin.admindash');
    }

        public function Adminlogout(){
            Auth::guard('admin')->logout();
    
            return redirect('/')->with('success','[admin Logout] Succesfully');
    
    }
}
