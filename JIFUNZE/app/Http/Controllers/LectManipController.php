<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Lecture;
use App\Models\Student;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class LectManipController extends Controller
{
    //
    public function updateStudent(Request $request){
        $incomingsdata = $request->validate([
            'studentid' => 'required',
            'firstname' => 'required|max:100|min:2',
            'lastname'  => 'required|max:100|min:2',
            'email'     => 'required|email',
            'phone'     => 'required|max:20|min:9',
            'regno'     => 'required|max:20|min:2',
            'courseid'  => 'required|integer'
        ]);

        $student = Student::find($incomingsdata['studentid']);

        if($student)
        {
            $student->update($incomingsdata);

            return redirect()->back()->with('success', '[Student Updated] Succesfully');
        }
        else
        {
            return redirect()->back()->with('error','[No student Found]');
        }
    }

    public function deletestudent($id)
    {
        $student = Student::where('id', $id)->first();

        // unaweza kutumia hii njia pia kumtafuta student kwa id yake
        // $student = Student::find($id);
        $student->delete();

        return redirect()->back()->with('success', '[Student Deleted] Succesfully');
    }

    public function addstudent(Request $request){
        $incomingsdata = $request->validate([
            'firstname'=>'required|string|max:50|min:2',
            'lastname'=>'required|string|max:50|min:2',
            'email'=>'required|email|unique:students',
            'phone'=>'required|string|max:13|min:9',
            'regno'=>'required|string|max:20|min:5|unique:students',
            'currentyear'=>'required',
            'password'=>'required|max:100|min:8',
            'courseid'=>'required'
        ]);

        $incomingsdata['password'] = Hash::make($incomingsdata['password']);
       
        Student::create($incomingsdata);

        return redirect()->back()->with('success','[students succesfully Added]');
    }

    public function updateAvatar(Request $request)
    {
        $lecture = Auth::guard('lecture')->user();

        $request->validate([
            'avatar' => 'required|image',
        ]);

        $path = Storage::disk('public')->put('lect_avatar', $request->file('avatar'));

        if($oldAvatar = $lecture->avatar)
        {
            Storage::delete($oldAvatar);
        }

        $lect = Lecture::find($lecture->id);

        $lect->update([
            'avatar' => $path
        ]);

        return back()->with('success', '[Lecture Avatar] Successfully');
    }

    public function updatelecture(Request $request){
        $lecture = Auth::guard('lecture')->user();
        
        $incomingsdata = $request->validate([
           // 'lectureid' => 'required',
            'firstname' => 'required|max:100|min:2',
            'lastname'  => 'required|max:100|min:2',
            'email'     => 'required|email',
            'moduleid'     => 'required'
          
        ]);
        //$lecture = lecture::find($incomingsdata['lectureid']);

        if($lecture)
        {
            $lecture->update($incomingsdata);

            return redirect()->back()->with('success', '[Lecture Updated] Succesfully');
        }
        else
        {
            return redirect()->back()->with('error','[No lecture Found]');
        }
    }


    public function updatePassword(Request $request)
    {
        $lecture = Auth::guard('lecture')->user();

        $incomingsdata = $request->validate([
            'cpassword'         => 'required|min:8|max:100',
            'npassword'         => 'required|min:8|max:100',
            'confirmpassword'   => 'required'
        ]);

        if(Hash::check($incomingsdata['cpassword'], $lecture->password))
        {
            $incomingsdata['npassword'] = Hash::make($incomingsdata['npassword']); 

            $lecture->update([
                'password' => $incomingsdata['npassword']
            ]);

            return redirect()->back()->with('success', '[Lecture Password Updated] Succesfully');
        }
        else
        {
            return back()->with('error','[Lecture Passwords Dont Match]');
        }
    }


    public function lecturereplypermpost(Request $request)
    {
        $incomingsdata = $request->validate([
            'attach' => 'file|nullable',
            'reply' => 'required|min:1|max:1000',
            'permission_id' => 'required'
        ]);

        if(!empty($incomingsdata['attach']))
        {
            $path = Storage::disk('public')->put('file_attach', $incomingsdata['attach']);
        }

        $permission = Permission::find($incomingsdata['permission_id']);

        $permission->update([
            'status' => 'replied'
        ]);

        Reply::create($incomingsdata);

        return redirect()->back()->with('success','[Reply Created] succesfully');
    }

    public function deletelectaccount(){
        $lecture = Auth::guard('lecture')->user();

        $lecture->delete();

        return redirect('/')->with('success','[Lecture deleted succesfully]');

    }
}