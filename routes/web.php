<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],function(){

Route::get('/', 'Auth\LoginController@index')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('auth.login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@index')->name('register');
Route::post('storedata', 'Auth\RegisterController@store')->name('store.data');


Route::group(['prefix' => 'admin'],function(){
    Route::get('index','Admin\AdminController@index')->name('admin.index');

    Route::get('show_teachers','Admin\ManageTeacherController@index')->name('show.teachers');
    Route::post('add_teacher','Admin\ManageTeacherController@store')->name('add.teacher');
    Route::get('delete_teacher/{id}','Admin\ManageTeacherController@destroy')->name('delete.teacher');

    Route::get('show_courses','Admin\ManageCourseController@index')->name('show.courses');
    Route::post('add_course','Admin\ManageCourseController@store')->name('add.course');
    Route::get('delete_course/{id}','Admin\ManageCourseController@destroy')->name('delete.course');

    Route::get('show_courseToteacher','Admin\ManageCourseController@showTeacher')->name('show.course.teacher');
    Route::post('add_courseToteacher','Admin\ManageCourseController@addteacher')->name('add.course.teacher');
    Route::get('delete_courseToteacher/{course_id}','Admin\ManageCourseController@destorycourseToteacher')->name('delete.course.teacher');
});

Route::group(['prefix' => 'student'],function(){
    Route::get('index','Student\StudentController@index')->name('student.index');
    Route::get('exam','Student\StudentController@exam')->name('student.exam');
    Route::get('result','Student\StudentController@result')->name('student.result');
    Route::get('courses','Student\StudentController@course')->name('student.courses');
});


Route::group(['prefix' => 'teacher'],function(){
    Route::get('index','Teacher\TeacherController@index')->name('teacher.index');
    Route::get('exam','Teacher\TeacherController@exam')->name('teacher.exam');
    Route::get('addscreen','Teacher\TeacherController@examscreen')->name('teacher.exam.screen');
    Route::get('courses','Teacher\TeacherController@course')->name('teacher.courses');
    Route::get('studentreq','Teacher\TeacherController@studentreq')->name('teacher.studentreq');
    Route::get('studentreg','Teacher\TeacherController@studentreg')->name('teacher.studentreg');
});
});
