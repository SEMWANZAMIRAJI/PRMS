<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use App\Models\Student;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LecturePageController extends Controller
{
    //
    public function lectdash(){
        $lecture = Auth::guard('lecture')->user();
        $students = Student::all();


        return view('Lecturer.lectDashboard', ['lecture'=>$lecture, 'students'=>$students]);
    }

    public function viewstudentlist(){
        $lecture = Auth::guard('lecture')->user();
        $students = Student::all();
        $courses = Course::all();
        $permissions = Permission::where('lecture_id',$lecture->id)->get();
        return view('Lecturer.viewstudent',['lecture'=>$lecture,'students'=>$students, 'courses'=>$courses,'permissions'=>$permissions]); 
    }

    public function searchstudent(Request $request)
    { 
        $lecture = Auth::guard('lecture')->user();
        $students = Student::all();
        $courses = Course::all();
        
        $query = Student::query();

        if($request->ajax())
        {
            $search = $request->value;

            $outputs = $query->where('firstname', 'LIKE', '%'.$search.'%')
                             ->orWhere('lastname', 'LIKE', '%'.$search.'%')
                             ->orWhere('regno', 'LIKE', '%'.$search.'%')
                             ->get();
            
            return response()->json([
                'outputs' => $outputs
            ]);
        }

        $students = $query->get();

        return view('Lecturer.viewstudent', ['lecture'=>$lecture,'students'=>$students, 'courses'=>$courses]); 
    }

    public function lectprofile(){
        $lecture = Auth::guard('lecture')->user();

        $students = Student::all();
        $modules = Module::all();

        return view('Lecturer.lectprofile',['lecture'=>$lecture, 'students'=>$students,'modules'=>$modules]);
    }

    public function lectreplypage()
    {
        $lecture = Auth::guard('lecture')->user();
        $permissions = Permission::where('lecture_id', $lecture->id)->get();
        $students = Student::all();
        $modules = Module::all();

        return view('Lecturer.lectReplyPermission', ['permissions'=>$permissions,'lecture'=>$lecture, 'students'=>$students,'modules'=>$modules]);
    }

    public function lectreplyajax(Request $request)
    {   
        $lecture = Auth::guard('lecture')->user();
        $permissions = Permission::where('lecture_id', $lecture->id)->get();
        $students = Student::all();
        $modules = Module::all();

        $permission = Permission::query();

        if($permission->ajax())
        {
            $permissionId = $request->id;

            $outputs = $permission->where('id', $permissionId)
                                  ->get();

            return response()->json([
                'outputs' => $outputs
            ]);
        }

        // $permissions = $permission->get();

        return view('Lecturer.lectReplyPermission', ['permissions'=>$permissions,'lecture'=>$lecture, 'students'=>$students,'modules'=>$modules]);
    }

    public function lectallpermiss(){
        $permissions = Permission::all();

        $lecture = Auth::guard('lecture')->user();

        $students = Student::all();

        return view('Lecturer.lectallperm',['permissions'=>$permissions,'students'=>$students,'lecture'=>$lecture ]);
    }

    public function lectallrepliedpermi(){
        $permissions = Permission::all();

        $lecture = Auth::guard('lecture')->user();

        $students = Student::all();

        return view('Lecturer.lectreplied',['permissions'=>$permissions,'lecture'=>$lecture,'students'=>$students]);
    }
}
