<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;

/*
Tutor---------Arabi
*/
//Route::get('/',[TeacherController::class,'home'])->name('root');

Route::get('/betutor',[TeacherController::class,'create'])->name('register');

Route::get('/verification',[TeacherController::class,'verify'])->name('verify');
Route::post('/verification',[TeacherController::class,'verifySubmit'])->name('verify');

Route::post('/betutor',[TeacherController::class,'createSubmit'])->name('registersubmit');

Route::get('/tutorlogin',[TeacherController::class,'login'])->name('login');

Route::get('/dashboard',[TeacherController::class,'list'])->name('dashboard');
Route::get('/user/details/{id}',[TeacherController::class,'details'])->name('userdetails');
Route::get('/logi',[TeacherController::class,'logout'])->name('logout');

Route::get('/email',[TeacherController::class,'sendMail'])->name('send');












/*
Student---------Raiyan
*/
































/*
Admin---------Faiza, Adrita
*/
Route::get('/admin',[AdminController::class,'Home'])->name('root');
Route::get('/teacherdetails',[AdminController::class,'tlist'])->name('Tutor.list');
Route::get('/tdetails/{id}/{name}/{email}',[AdminController::class,'tutor'])->name('Tutor.teacherdetails');
Route::get('/studentdetails',[AdminController::class,'slist'])->name('Student.list');
Route::get('/sdetails/{id}/{name}/{email}/{phone}',[AdminController::class,'student'])->name('Student.studentdetails');
