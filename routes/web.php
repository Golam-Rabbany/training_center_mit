<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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


require __DIR__.'/auth.php';


Route::resource('frontpage', FrontendController::class);

Route::get('frontend/course', [FrontendController::class, 'course'])->name('frontend.course');
Route::get('admission', [FrontendController::class, 'admission'])->name('frontend.admission');

Route::resource('student', StudentController::class);

Route::group(['middleware' => 'auth'], function () {

    Route::resource('/backend', DashboardController::class);

    Route::resource('banner', BannerController::class);
    
    
    
    Route::resource('course', CourseController::class);
    
    Route::resource('teacher', TeacherController::class);


    Route::get('/student/status/{id}', [StudentController::class, 'stutus'])->name('student.status');
    Route::post('/student/status_update/{id}', [StudentController::class, 'status_update'])->name('student.status_update');

    Route::resource('payment', PaymentController::class);

});





