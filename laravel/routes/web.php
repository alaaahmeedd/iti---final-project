<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRecourseController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\CourseVideosController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\Auth\Controller;
use App\Http\Controllers\StudentTaskController;
use App\Http\Controllers\MessageController;
use App\Models\Course;
use App\Models\Video;
use App\Models\Magazine;
use App\Models\CourseVideo;
use App\Models\ContactMessage;
use App\Models\Task;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\User;
use App\Models\StudentTask;



/*
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::resource("message",ContactMessageController::class);

Route::resource('user', UserRecourseController::class);
Route::resource('course', CourseController::class);
Route::resource('magazine', MagazineController::class);
Route::resource('task', TaskController::class);

Route::get('/', function () {
    $videos = Video::All()->Take(3);
    
    return view('guest.home',['videos'=>$videos]);
});

// Resourse controllers
Route::resource("coursevideo",CourseVideosController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/student/courses', function () {
    return view('student.courses');
})->name('courses');

// login
Route::group(['namespace' => 'Auth', 'middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'show']);
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    
});
// ADMIN ////////////////////////////////////////////////////////////////////////////

Route::group(['middleware'=>'auth'], function(){
    
    Route::group(['middleware'=>'userType:1'], function(){
        Route::get('/admin/dash',function(){
            return view('admin.dashboard');
        });
        
       
        
        Route::get('/admin/addstudent',function(){
            return view('admin.addstudent');
        });
       
        Route::resource("videos",VideoController::class);
     
        // Route::get('/admin/teacher',function(){
        //     return view('admin.teacher-dash');
        // });
        
        // Route::get('/admin/teacher',function(){
        //     return view('admin.teacher-dash');
        // });
        
        // Route::get('/admin/parent',function(){
        //     return view('admin.parent-dash');
        // });
        
        // Route::get('/admin/user',function(){
        //     return view('admin.user-dash');
        });
        
        Route::get('/admin/course',function(){
            return view('admin.course-dash');
        });
        
        
        
        
        Route::get('/admin/grade',function(){
            return view('admin.grade-dash');
        });
        Route::get('admin/year1','App\Http\Controllers\UserController@showYear1');
Route::get('admin/year2','App\Http\Controllers\UserController@showYear2');
Route::get('admin/year3','App\Http\Controllers\UserController@showYear3');
Route::get('admin/year4','App\Http\Controllers\UserController@showYear4');
Route::get('admin/year5','App\Http\Controllers\UserController@showYear5');
Route::get('admin/year6','App\Http\Controllers\UserController@showYear6');

// //Parent list
Route::get('admin/parent','App\Http\Controllers\UserController@indexParent');

// //Teacher list
Route::get('admin/teacher','App\Http\Controllers\UserController@indexTeacher');

// //user list
Route::get('admin/user','App\Http\Controllers\UserController@indexUser');
Route::get('/admin/dash',function(){

    // $count2 = User::where('role',2)->count();
    $count1 = User::where('role',1)->count();
    // $count3 = User::where('role',3)->count();
    // $count4 = User::where('role',4)->count();

    return view('admin.dashboard',['count1'=>$count1]);
});

    // TEACHER MIDDLWARE***************************************************************************
    
    Route::group(['middleware'=>'userType:4'], function(){
        Route::get('/teacher/home',function(){
            $videos = Video::All()->Take(3);
            
            return view('teacher.home',['videos'=>$videos]);
        });
     
        Route::resource("reply",ReplyController::class);
        Route::get('/teacher/mycourse',function(){
            $user=Auth()->user();
            // dd($user);
            return view('teacher.mycourses',['user'=>$user]);
            
        })->name('mycourses');

        Route::get('/teacher/showcomment/{video}',function(CourseVideo $video){
            return view ('teacher.comment',['video'=>$video]);
        })->name('showcomment');
        
        
        Route::get('/teacher/aboutus',function(){
            return view('teacher.aboutus');
        });
        
        Route::get('/teacher/contactus',function(){
            return view('teacher.contactus');
        });
        Route::get('/teacher/parent',function(){
            return view('teacher.parent');
        });
        
        Route::get('/teacher/video',function(){
            $videos = Video::All();
            return view('teacher.video',['videos'=>$videos]);
        
        });
        

        Route::get('/teacher/magazine',function(){
           
            $magazines = Magazine::All();
            return view('teacher.magazine',['magazines'=>$magazines]);
            
        });
        
        
        Route::get('/teacher/comment',function(){
            return view('teacher.comment');
        });
        
        Route::get('/teacher/task',function(){
            $user=Auth()->user();
            return view('teacher.task',['user'=>$user]);
        });
        
        Route::get('/teacher/result',function(){
            $courses=Auth::User()->courses;
            return view('teacher.resultcourses',['courses'=>$courses]);
        });
        
        Route::get('result/{video}',function(CourseVideo $video){
            // dd($video->task);
            $students=User::where('grade',$video->course->grade)->get();
            //   $studentsToDelete=StudentTask::where('task_id',$video->task[0]->id)->get();
            
            //     foreach($students as $student)
            //     foreach($studentsToDelete as $studentToDelete)
            //     {if($studentToDelete['user_id']==!$student['id'])
                //     dd( "hi");}
                
                
                // dd($video->task[0]);
                
                return view('teacher.result',['video'=>$video],['students'=>$students]);
            });
        
        Route::resource('studenttask', StudentTaskController::class);

    });
    // STUDENT MMIDDLEWARE /////////////////////////////////////////////////
    Route::group(['middleware'=>'userType:2'], function(){
        Route::get('/student/home',function(){
            $videos = Video::All()->Take(3);
            
            return view('student.home',['videos'=>$videos]);
        });
        Route::get('/student/aboutus',function(){
            return view('student.about');
        });
        
        Route::get('/student/contactus',function(){
            return view('student.contactus');
        });
        Route::get('/student/parent',function(){
            return view('student.parent');
        });

        Route::resource("comment",CommentController::class);
        Route::get('/student/video',function(){
            $videos = Video::All();
            return view('student.video',['videos'=>$videos]);
        });
        Route::get('/student/magazine',function(){
           
            $magazines = Magazine::All();
          return view('student.magazine',['magazines'=>$magazines]);
            
        });
        
        Route::get('/student/courses',function(){
            $courses = Course::where('grade',Auth::user()->grade)->get();
            $child =Auth::user(); 
            // dd($child);
            return view('student.courses',['courses'=>$courses],['child'=>$child]);
        });
        
        Route::get('/student/profile',function(){
            $user=Auth::user();
           $courses = Course::where('grade',Auth::user()->grade)->get();
           return view('student.profile',['user'=>$user],['courses'=>$courses]);
        });
        // Route::get('/student-dash',function(){
            //     return view('user/student-dash');
            // });
            
        });
        ///////////////////////////////////////////////////////////////////////////////////
        // middleware of parent-============================
    Route::group(['middleware'=>'userType:3'], function(){
        Route::get('parent/home',function(){
            $videos = Video::All()->Take(3);
    
            return view('parent.home',['videos'=>$videos]);
        });
        Route::get('/parent/aboutus',function(){
            return view('parent.about');
        });
        Route::get('/parent/parent',function(){
            return view('parent.parent');
        });
        
        Route::get('/parent/contactus',function(){
            return view('parent.contactus');
        });
        
        Route::get('/parent/video',function(){
            $videos = Video::All();
            return view('parent.video',['videos'=>$videos]);
        });
        Route::get('/parent/magazine',function(){
           
            
            $magazines = Magazine::All();
            return view('parent.magazine',['magazines'=>$magazines]);
        });

        Route::get('/parent/parentview',function(){
            $parent = Auth()->User();
            // dd($parent);
        
            return view('parent.parentview',['parent'=> $parent]);
           
        });
        Route::get('/childprogress/{child}',function(User $child){
            
            $courses=Course::where('grade',$child->grade)->get();
            
            // dd($courses[0]->coursevideos[0]->task);
            return view('parent.onechildprogress',['child'=>$child],['courses'=>$courses]);
            
            //  dd($child->task[0]->pivot->marks);
            
            
           
        });
        
    });
    
});



/**************************************************************** */
//guest view
Route::get('home',function(){
    $videos = Video::All()->Take(3);
    
    return view('guest.home',['videos'=>$videos]);
});
Route::get('/parent',function(){
    return view('guest.parent');
});
Route::get('/aboutus',function(){
    return view('guest.about');
});

Route::get('/contactus',function(){
    return view('guest.contactus');
});

Route::get('/video',function(){
    $videos = Video::All();
    return view('guest.video',['videos'=>$videos]);
});
Route::get('/guest/magazine',function(){
    
    $magazines = Magazine::All();
    return view('guest.magazine',['magazines'=>$magazines]);
});
/************************************************************** */






