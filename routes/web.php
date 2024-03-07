<?php

use Illuminate\Support\Facades\Route;
use App\Models\Applications;

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
    return view('livewire.landing-page');
})->name('landing-page');


Route::get('/plm/jobs', function () {
    return view('jobs-available');
})->name('guest-jobs');


Route::post('/plm/jobs/application/{id}', [\App\Http\Controllers\Applicant\ApplicantController::class, 'guest_application'])
->name('guest-application');

Route::post('/plm/jobs/application/{id}/success', [\App\Http\Controllers\Applicant\ApplicantController::class, 'apply'])
->name('guest-application-success');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::group(['middleware' => 'role:personnel management', 'prefix' => 'admin', 'as' => 'hr.'], function(){
        Route::resource('dashboard', \App\Http\Controllers\HR\HRController::class);
    });

    Route::group(['middleware' => 'role:recruitment', 'prefix' => 'recruitment', 'as' => 'r.'], function(){
        Route::resource('dashboard', \App\Http\Controllers\Recruitment\RecruitmentController::class);
    });

    Route::group(['middleware' => 'role:compensation', 'prefix' => 'compensation', 'as' => 'c.'], function(){
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

    Route::group(['middleware' => 'role:applicant'], function(){
        Route::get('/applicant/jobs/application', [\App\Http\Controllers\Applicant\ApplicantController::class, 'application'])
        ->name('application-section');
    });

    Route::group(['middleware' => 'role:applicant'], function(){
        Route::post('/applicant/jobs/detail/{id}', [\App\Http\Controllers\Applicant\ApplicantController::class, 'store'])
        ->name('applicant.apply');
    });

    Route::group(['middleware' => 'role:personnel management', 'prefix' => 'pm'], function(){
        Route::get('/view/employee/list', [\App\Http\Controllers\HR\HRController::class, 'emp_list'
        ])->name('view-employee-list');
    });

    Route::group(['middleware' => 'role:personnel management', 'prefix' => 'pm'], function(){
        Route::get('/view/employee/profile/{id}', [\App\Http\Controllers\HR\HRController::class, 'emp_detail'])
        ->name('view-employee-profile');
    });

    Route::group(['middleware' => 'role:personnel management', 'prefix' => 'pm'], function(){
        Route::get('/view/request', function () {
            return view('hr.view-request');
        })->name('view-request');
    });

    Route::group(['middleware' => 'role:recruitment', 'prefix' => 'recruitment'], function(){
        Route::get('/view/applicant/list', [\App\Http\Controllers\Recruitment\RecruitmentController::class, 'join_data'])
        ->name('applicant-list');
    });

    Route::group(['middleware' => 'role:recruitment', 'prefix' => 'recruitment'], function(){
        Route::get('/view/applicant/profile/{id}', [\App\Http\Controllers\Recruitment\RecruitmentController::class, 'applicant_profile'])
        ->name('view-applicant-profile');
    });

    Route::get('/view/applicant/profile/{id}/file', [\App\Http\Controllers\Recruitment\RecruitmentController::class, 'view_file'])
    ->name('view-file');

    Route::group(['middleware' => 'role:recruitment', 'prefix' => 'recruitment'], function(){
        Route::get('/job-posting', [\App\Http\Controllers\Recruitment\RecruitmentController::class, 'job_posting'])
        ->name('job-posting');
    });

    Route::group(['middleware' => 'role:recruitment', 'prefix' => 'recruitment'], function(){
        Route::post('/job-posting/success', [\App\Http\Controllers\Recruitment\RecruitmentController::class, 'job_post'])
        ->name('job-post');
    });
    

    Route::group(['middleware' => 'role:compensation', 'prefix' => 'compensation'], function(){
        Route::post('/leave-request', [\App\Http\Controllers\Compensation\compenbencontroller::class, 'leave-request'] )->name('leave-request');
    });


    Route::get('/search', [\App\Http\Controllers\JobsAvailableController::class, 'search']);

}); 