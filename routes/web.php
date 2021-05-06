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

Route::get('/', function () {
    return view('index');
});


Route::get('/result',function(){
    return view('pages.student.result');
})->name('result');


Route::group(['prefix' => 'admin'],function(){
    Route::get('show_teachers','Admin\ManageTeacherController@index')->name('show.teachers');
    Route::post('add_teacher','Admin\ManageTeacherController@store')->name('add.teacher');
    Route::get('delete_teacher/{id}','Admin\ManageTeacherController@destroy')->name('delete.teacher');

    Route::get('show_courses','Admin\ManageCourseController@index')->name('show.courses');
    Route::post('add_course','Admin\ManageCourseController@store')->name('add.course');
    Route::get('delete_course/{id}','Admin\ManageCourseController@destroy')->name('delete.course');
});

