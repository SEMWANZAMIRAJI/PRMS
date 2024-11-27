<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Course;
use App\Models\Module;
use App\Models\Lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LectureAuthController extends Controller
{
    // method of view page
    public function lectregpage(){
        $modules = Module::all();
        
        return view('Lecturer.lectureg', ['modules'=>$modules]);
      
    }

    // method of sending data
    public function sendlectdata(Request $request){
        $incomingFields = $request->validate([
            'firstname' => 'required|max:15|min:3|string',
            'lastname' => 'required|max:15|min:4|string',
            'email' => 'required|email|unique:lectures',
            'moduleid' => 'required',
            'password' => 'required|max:30|min:8|string'
        ]);

        $incomingFields['password'] = Hash::make($incomingFields['password']);

        $registlectu = Lecture::create($incomingFields);

        if($registlectu)
        {
            return redirect('lectureg')->with('success','[Lecture Register] Successfully');
        }
        else
        {
            return redirect('lectureg')->with('error','[Lecture Register] Failed');
        }
    }

    public function lectlogin(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:30|min:8|string'
        ]);

        if($request->email == "admin@gmail.com")
        {
            $admin = Admin::where('email', $request->email)->first();

            if($admin->password == $request->password)
            {
                Auth::guard('admin')->login($admin);

                return redirect('admindashboard')->with('success', '[Admin Login Successfully]');
            }
            else
            {
                return back()->with('error', '[Login Failed] Incorrect Password');
            }
        }
        else
        {

            //je hapa ninaweza kutengeneza izi incoming fileds je nikija kwenye request only naandikaje
            $incomingFields = $request->only('email','password');

            if(Auth::guard('lecture')->attempt($incomingFields))
            {
                return redirect('lectdashboard')->with('success','[Lecture Login] Succesfully');
            }
            else
            {
                return back()->with('error','[Lecture Login] Failed');
            }
            
        }

    }

    public function lectlogout(){
        Auth::guard('lecture')->logout();

        return redirect('lecturer')->with('success','[Lecture Logout] Succesfully');
    }





    
}






