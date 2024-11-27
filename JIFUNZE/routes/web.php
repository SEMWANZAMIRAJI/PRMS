<?php

use App\Http\Controllers\StudentMani;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LectManipController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\LectureAuthController;
use App\Http\Controllers\LecturePageController;
use App\Http\Controllers\StudentAuthController;
use App\Http\Controllers\StudentPageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', function () {
    return view('index');
});

Route::get('select',function (){
    return view('select');
});

Route::get('lecturer',function (){
    return view('Lecturer.lecturerlog');
});

//Route::get('b', [LecturePageController::class, 'lect']);

Route::get('lectureg', [LectureAuthController::class, 'lectregpage'])->name('lectureg');
Route::post('lecturesubform', [LectureAuthController::class, 'sendlectdata'])->name('lectsenddat');

Route::post('lectlogin',[LectureAuthController::class,'lectlogin'])->name('lectulogin');

Route::middleware(['lectureAuth'])->group(function () {
    Route::get('lectdashboard',[LecturePageController::class,'lectdash'])->name('lectudash');

    Route::get('lectlogout',[LectureAuthController::class,'lectlogout'])->name('lectulogout');
    Route::get('viewstudentlist',[LecturePageController::class,'viewstudentlist'])->name('viewstudentlist');
    Route::get('lectallpermis',[LecturePageController::class,'lectallpermiss'])->name('lectallpermis');
    Route::get('lectallrepliedperm',[LecturePageController::class,'lectallrepliedpermi'])->name('lectallrepliedperm');
    // ajax search student
    Route::get('searchstudent',[LecturePageController::class,'searchstudent'])->name('searchstudentlist');

    
    // lectreplypermission
    Route::get('lectreplypermission', [LecturePageController::class, 'lectreplypage'])->name('lecture.reply.permission');
    Route::get('lectureReply', [LecturePageController::class, 'lectreplyajax'])->name('lecture.reply.ajax');


    Route::post('lectureReplyPermission',[LectManipController::class, 'lecturereplypermpost'])->name('lecture.reply.permission');;
    
    Route::post('lectUpdateStudent',[LectManipController::class,'updateStudent'])->name('updatestudents');
    Route::post('lectureUpdatePass', [LectManipController::class,'updatePassword'])->name('update-password');

    Route::get('deletestudent{id}', [LectManipController::class, 'deletestudent'])->name('lect.delete.Student');
    Route::post('lectAddStudent',[LectManipController::class,'addstudent'])->name('lectAddstudent');
    Route::get('lectprofile',[LecturePageController::class,'lectprofile'])->name('lectprofile');
    Route::post('lectupdateavatar', [LectManipController::class, 'updateAvatar'])->name('lect.update.avatar');
    Route::post('lectureUpdate',[LectManipController::class,'updatelecture'])->name('lectureUpdate');
    Route::get('deleteLectAccount',[LectManipController::class,'deletelectaccount'])->name('deleteLectAccount');
});

Route::middleware(['AdminAuth'])->group(function(){
    Route::get('admindashboard',[AdminController::class,'admindashview'])->name('admindashboard');
    Route::get('adminlogout',[AdminController::class,'Adminlogout'])->name('adminlogout');
});


Route::get('studentregview',[StudentPageController::class,'studentregpageview'])->name('studentregview');
// Route::get('studentreg',function (){
//     return view('student.studentreg');
// });

Route::post('studentreg',[StudentPageController::class,'sendstudentregdata'])->name('studentreg');

Route::get('studentlog',function (){
    return view('student.studentlog');
});

Route::post('studentlogin',[StudentAuthController::class,'studlogin'])->name('studentlogin');

Route::middleware(['studentAuth'])->group(function(){
    Route::get('studentdashboard',[StudentPageController::class,'studentdash'])->name('studentdashboard');
    Route::get('studentlogout',[StudentAuthController::class,'studelogout'])->name('studentlogout');
    Route::get('studentAddPerm',[StudentPageController::class, 'addpermviewpage'])->name('studentAddPerm');
    Route::post('studentaddpermission',[StudentMani::class,'sendstudentpermi'])->name('studentaddpermission');
    Route::get('ViewallPermission',[StudentPageController::class,'studenviewAllpermision'])->name('ViewallPermission');
    Route::get('viewrepliedperm',[StudentPageController::class,'allrepliedpermi'])->name('viewrepliesperm');
    Route::get('unrepliedpermis',[StudentPageController::class,'unrepliedpermi'])->name('unrepliedpermis');
});

Route::get('auth/google',[GoogleAuthController::class,'redirect'])->name('google.redirect');
Route::get('auth/google/call-back',[GoogleAuthController::class,'callbackgoogle']);

//Route::get('studentreg', [LectureAuthController::class, 'studentregpage'])->name('srudentreg');

