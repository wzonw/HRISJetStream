<?php

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/applicant/user/info/personal', function () {
        return view('livewire.user-personal-info');
    })->name('user-personal-info');
});


Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::group(['middleware' => 'role:hr', 'prefix' => 'admin', 'as' => 'hr.'], function(){
        Route::resource('dashboard', \App\Http\Controllers\HR\HRController::class);
    });

    Route::group(['middleware' => 'role:recruitment', 'prefix' => 'recruitment', 'as' => 'r.'], function(){
        Route::resource('dashboard', \App\Http\Controllers\Recruitment\RecruitmentController::class);
    });

    Route::group(['middleware' => 'role:compen-ben', 'prefix' => 'compensation', 'as' => 'c.'], function(){
        Route::resource('dashboard', \App\Http\Controllers\Compensation\compenbencontroller::class);
    });
    

    Route::group(['middleware' => 'role:applicant', 'prefix' => 'applicant', 'as' => 'applicant.'], function(){
        Route::resource('dashboard', \App\Http\Controllers\Applicant\ApplicantController::class);
    });

    Route::group(['middleware' => 'role:applicant'], function(){
        Route::get('/applicant/jobs', function () {
            return view('jobs-available');
        })->name('jobs-available');
    });

    Route::group(['middleware' => 'role:hr', 'prefix' => 'admin'], function(){
        Route::get('/view/employee/list', function () {
            return view('hr.view-employee-list');
        })->name('view-employee-list');
    });

    Route::group(['middleware' => 'role:hr', 'prefix' => 'admin'], function(){
        Route::get('/view/employee/profile', function () {
            return view('hr.view-employee-profile');
        })->name('view-employee-profile');
    });

    Route::group(['middleware' => 'role:hr', 'prefix' => 'admin'], function(){
        Route::get('/view/request', function () {
            return view('hr.view-request');
        })->name('view-request');
    });

    Route::group(['middleware' => 'role:recruitment', 'prefix' => 'recruitment'], function(){
        Route::get('/job-posting', function () {
            return view('hr.job-posting ');
        })->name('job-posting');
    });

    Route::group(['middleware' => 'role:recruitment', 'prefix' => 'recruitment'], function(){
        Route::get('/applicant/list', function () {
            return view('hr.applicant-list');
        })->name('applicant-list');
    });

    Route::group(['middleware' => 'role:recruitment', 'prefix' => 'recruitment'], function(){
        Route::get('/applicant/profile', function () {
            return view('hr.applicant-profile');
        })->name('applicant-profile');
    });

    Route::group(['middleware' => 'role:compen-ben', 'prefix' => 'compensation'], function(){
        Route::get('/leave-request', function () {
            return view('hr.leave-request');
        })->name('leave-request');
    });

    Route::group(['middleware' => 'role:compen-ben', 'prefix' => 'compensation'], function(){
        Route::get('/leave-list', function () {
            return view('hr.leave-list');
        })->name('leave-list');
    });

    Route::group(['middleware' => 'role:compen-ben', 'prefix' => 'compensation'], function(){
        Route::get('/time-keeping', function () {
            return view('hr.time-keeping');
        })->name('time-keeping');
    });
}); 