<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Http\Request;

class StudentAuthController extends Controller
{



    // method of sending data
    public function sendstudentregdata(Request $request){
        $incomingFields = $request->validate([
            'firstname' => 'required|max:15|min:3|string',
            'lastname' => 'required|max:15|min:4|string',
            'email' => 'required|email|unique:lectures',
            'phone' => 'required',
            'regno' =>'required|max:12|string',
            'currentyear' => 'required|string',
            'courseid' =>'required|max:12|string',
            'password' => 'required|max:30|min:8|string'
           // dd($request)
            
            
        ] );


        $incomingFields['password'] = Hash::make($incomingFields['password']);

        $regist_student = Student::create($incomingFields);

        if($regist_student)
        {
            return redirect('studentregview')->with('success','[Student Register] Successfully');
        }
        else
        {
            return redirect('studentregview')->with('error','[Student Register] Failed');
        }
    }

   


     public function studlogin(Request $request){
        $request->validate([
            'email' => 'required|email',
           'password' => 'required|max:30|min:8|string'
       ]);

            //je hapa ninaweza kutengeneza izi incoming fileds je nikija kwenye request only naandikaje
        $incomingFields = $request->only('email','password');
        

        if(Auth::guard('student')->attempt($incomingFields))
        {
             return redirect('studentdashboard')->with('success','[student Login] Succesfully');
       }
        else
      {
             return back()->with('error','[student Login] Failed');
       }
    }

    public function studelogout(){
        $student = Auth::guard('student')->logout();

     
        return redirect('studentlog')->with('success','[student Logout] Succesfully');
    }
    
}

