<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    //
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callbackgoogle()
    {
        try {
            //code...
            $user = Socialite::driver('google')->user();
            $ouruser = Student::where('google_id',$user->getId())->first();
            if($ouruser)
            {
                // login
                Auth::guard('student')->login($ouruser);
            }
            else
            {
                $student = Student::create([
                    'firstname' => 'MirAJI',
                    'lastname' => 'Semwanza',
                    'email' => $user->getEmail(),
                    'google_id' => $user->getId(),
                    'phone' => '0786534533',
                    'regno' => '123456789',
                    'currentyear' =>  '2024',
                    'courseid' => '1'
                ]);

                Auth::guard('student')->login($student);
            }
        } catch (Throwable $th) {
            dd("Something wrong!" . $th);
        }
    }
}
