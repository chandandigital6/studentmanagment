<?php

use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentCOntroller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\ReportCOntroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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
    return view('layout');
});

// student
Route::get('student/index',[StudentController::class,'index'])->name('student.index');
Route::get('student/create',[StudentController::class,'create'])->name('student.create');
Route::post('student/store',[StudentController::class,'store'])->name('student.store');
Route::get('student/store/{student}',[StudentController::class,'edit'])->name('student.edit');
Route::put('student/update/{student}',[StudentController::class,'update'])->name('student.update');
Route::delete('student/update/{student}',[StudentController::class,'delete'])->name('student.delete');
Route::get('student/show/{student}',[StudentController::class,'show'])->name('student.show');

//Teacher
Route::get('teacher/index',[TeacherController::class,'index'])->name('teacher.index');
Route::get('teacher/create',[TeacherController::class,'create'])->name('teacher.create');
Route::post('teacher/store',[TeacherController::class,'store'])->name('teacher.store');
Route::get('teacher/store/{teacher}',[TeacherController::class,'edit'])->name('teacher.edit');
Route::put('teacher/update/{teacher}',[TeacherController::class,'update'])->name('teacher.update');
Route::delete('teacher/update/{teacher}',[TeacherController::class,'delete'])->name('teacher.delete');
Route::get('teacher/show/{teacher}',[TeacherController::class,'show'])->name('teacher.show');


//courses

Route::get('course/index',[CourseController::class,'index'])->name('course.index');
Route::get('course/create',[CourseController::class,'create'])->name('course.create');
Route::post('course/store',[CourseController::class,'store'])->name('course.store');
Route::get('course/store/{course}',[CourseController::class,'edit'])->name('course.edit');
Route::put('course/update/{course}',[CourseController::class,'update'])->name('course.update');
Route::delete('course/update/{course}',[CourseController::class,'delete'])->name('course.delete');
Route::get('course/show/{course}',[CourseController::class,'show'])->name('course.show');

//batches


Route::get('batch/index',[BatchController::class,'index'])->name('batch.index');
Route::get('batch/create',[BatchController::class,'create'])->name('batch.create');
Route::post('batch/store',[BatchController::class,'store'])->name('batch.store');
Route::get('batch/store/{batch}',[BatchController::class,'edit'])->name('batch.edit');
Route::put('batch/update/{batch}',[BatchController::class,'update'])->name('batch.update');
Route::delete('batch/update/{batch}',[BatchController::class,'delete'])->name('batch.delete');
Route::get('batch/show/{batch}',[BatchController::class,'show'])->name('batch.show');


//enrollment


Route::get('enroll/index',[EnrollmentCOntroller::class,'index'])->name('enroll.index');
Route::get('enroll/create',[EnrollmentCOntroller::class,'create'])->name('enroll.create');
Route::post('enroll/store',[EnrollmentCOntroller::class,'store'])->name('enroll.store');
Route::get('enroll/store/{enrollment}',[EnrollmentCOntroller::class,'edit'])->name('enroll.edit');
Route::put('enroll/update/{enrollment}',[EnrollmentCOntroller::class,'update'])->name('enroll.update');
Route::delete('enroll/update/{enrollment}',[EnrollmentCOntroller::class,'delete'])->name('enroll.delete');
Route::get('enroll/show/{enrollment}',[EnrollmentCOntroller::class,'show'])->name('enroll.show');


// payments

Route::get('payment/index',[PaymentController::class,'index'])->name('payment.index');
Route::get('payment/create',[PaymentController::class,'create'])->name('payment.create');
Route::post('payment/store',[PaymentController::class,'store'])->name('payment.store');
Route::get('payment/store/{payment}',[PaymentController::class,'edit'])->name('payment.edit');
Route::put('payment/update/{payment}',[PaymentController::class,'update'])->name('payment.update');
Route::delete('payment/update/{payment}',[PaymentController::class,'delete'])->name('payment.delete');
Route::get('payment/show/{payment}',[PaymentController::class,'show'])->name('payment.show');

//report controller

Route::get('report/index/{id}',[ReportCOntroller::class,'generatePDF'])->name('report.index');


//razorpay



    Route::get('ask-payment',[RazorpayController::class,'askPayment'])->name('pay.ask');
Route::get('product',[RazorpayController::class,'index'])->name('pay.index');
Route::post('razorpay-payment',[RazorpayController::class,'payment'])->name('razorpay.payment.store');
