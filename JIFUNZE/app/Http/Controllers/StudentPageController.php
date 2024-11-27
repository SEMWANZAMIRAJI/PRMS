<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentPageController extends Controller
{
    //
    public function  studentdash(){
       $permissions = Permission::all();
        $student = Auth::guard('student')->user();

        return view('student.studenDashboard',['student'=>$student,'permissions'=>$permissions]);
    }

    // method of view page
    public function studentregpageview(){
        $courses = Course::all();
      //  dd($courses);
        return view('student.studentregview', ['courses'=>$courses]);
    }

    public function addpermviewpage(){
        $student = Auth::guard('student')->user();
        $lectures = Lecture::all();
        $permissions = Permission::all();
        
        return view('student.studentaddpermi',['student'=>$student,'lectures'=>$lectures,'permissions'=>$permissions]);
    }

    public function studenviewAllpermision(){
        $student = Auth::guard('student')->user();

        $permissions = Permission::all();

        $lectures = Lecture::all();

        return view('student.studentviewallpermision',['permissions'=>$permissions,'lectures'=>$lectures,'student'=>$student]);
    }

    public function allrepliedpermi(){
        $student = Auth::guard('student')->user();

        $permissions = Permission::all();

        $lectures = Lecture::all();

        return view('student.allrepliedperm',['permissions'=>$permissions,'lectures'=>$lectures,'student'=>$student]);
    }

    public function unrepliedpermi(){
        $student = Auth::guard('student')->user();

        $permissions = Permission::all();

        $lectures = Lecture::all();

        return view('student.unrepliedperm',['permissions'=>$permissions,'lectures'=>$lectures,'student'=>$student]);
    }
}
