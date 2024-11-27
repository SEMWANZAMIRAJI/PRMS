<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StudentMani extends Controller
{
  
public function sendstudentpermi(Request $request){
    $incomingsdata = $request->validate([
        'student_id' =>'required',
        'lecture_id'=>'required',
        'title' =>'required|min:5|max:100',
        'description' =>'required|min:5',
        'attach'=>'file|nullable'
    ]);

    $incomingsdata['title'] = strtoupper($incomingsdata['title']);

    if(!empty($incomingsdata['attach']))
    {
        $incomingsdata['attach'] = Storage::disk('public')->put('file_attach', $incomingsdata['attach']);
    }

    $incomingsdata['status'] = "unreplied";

    Permission::create($incomingsdata);

    return redirect()->back()->with('success','[Students Permission] Added Successfully');
}
   


}