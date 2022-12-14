<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [PagesController::class, 'index'])->name('hello');
Route::get('/profile',[PagesController::class, 'profile'])->name('profile');


Route::get('/studentList',[StudentController::class, 'studentList'])->name('studentList')->middleware('ValidTeacher');
// Route::get('/studentEdit/{name}/{id}',[StudentController::class, 'studentEdit'])->name('studentEdit');
Route::get('/studentEdit/{id}',[StudentController::class, 'studentEdit'])->name('studentEdit');
Route::post('/studentEdit',[StudentController::class, 'studentEditSubmitted'])->name('studentEdit');
Route::get('/studentDelete/{id}',[StudentController::class, 'studentDelete'])->name('studentDelete');

Route::get('/studentCreate',[StudentController::class, 'studentCreate'])->name('studentCreate')->middleware('ValidTeacher');
Route::post('/studentCreate',[StudentController::class, 'studentCreateSubmitted'])->name('studentCreate');

//teacher
Route::get('/teacherCreate',[TeacherController::class, 'teacherCreate'])->name('teacherCreate')->middleware('ValidTeacher');;
Route::post('/teacherCreate',[TeacherController::class, 'teacherCreateSubmitted'])->name('teacherCreate');
Route::get('/teacherList',[TeacherController::class, 'teacherList'])->name('teacherList')->middleware('ValidTeacher');;

//Teacher Course
Route::get('/teacher/courses/{id}',[TeacherController::class,'teacherCourses'])->name('teacher.courses')->middleware('ValidTeacher');
//course
Route::get('/courses',[CourseController::class,'courseTeacher'])->name('teacher.courses'); 

//Teacher login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


//teacher dash
Route::get('/teacher/dash', [TeacherController::class,'teacherDash'])->name('teacherDash')->middleware('ValidTeacher'); 