<?php

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

Route::get('/', 'User\UserController@recentjobs');

Route::view('/admin','admin.admin'); 

Route::view('/profile','admin.admin_profile'); 


Route::get('/jobs','User\UserController@jobs');

Route::get('/jobDescription/{id}','User\UserController@description' );

Route::view('/contact','user.contact');

Route::view('/privacy','user.privacy');

Route::view('/jobseeker-register','user.jobseeker_register');

Route::view('/jobseeker-login','user.jobseeker_login');

Route::post('/jobseeker-login','User\UserController@login');


Route::view('/employer','user.employer');

Route::post('/search-job','User\UserController@Search_Job' );


Route::post('/employer_submit','User\UserController@employer' );

Route::post('/jobseeker_submit','User\UserController@jobseeker');


Route::post('/contact_submit','User\UserController@contact' );

Route::post('/applyJob/{id}','User\UserController@applyJob' );

Route::post('/admin_submit','Admin\AdminController@admin' );

Route::get('/download/{file_name}/{id}','Admin\AdminController@getDownload' );

Route::get('/appliedJobs','Admin\AdminController@appliedJobs' );

Route::get('/jobseeker-section','Admin\AdminController@dash_jobseeker' );


Route::get('/employer-section','Admin\AdminController@dash_employer' );


Route::get('/contact-section','Admin\AdminController@dash_contact' );

Route::get('/jobs-section','Admin\AdminController@dash_jobs' );

Route::post('/reset-password','Admin\AdminController@Reset_Password' );


Route::get('/reset',function(){
   return view('admin.password_reset');
});

Route::get('/edit/{id}','Admin\AdminController@edit' );

Route::post('/update/{id}','Admin\AdminController@update' );

Route::get('/delete-job/{id}','Admin\AdminController@deleteJob' );

Route::get('/delete-employer/{id}','Admin\AdminController@deleteEmployer' );

Route::get('/delete-jobseeker/{id}','Admin\AdminController@deleteJobseeker' );

Route::get('/delete-contact/{id}','Admin\AdminController@deleteContact' );

Route::get('/delete-appliedjob/{id}','Admin\AdminController@deleteAppliedJob' );

Route::post('/addNew','Admin\AdminController@addNew' );

Route::get('/dashboard','Admin\AdminController@dashboard' );

Route::get('/add', function () {
    return view('admin.add');
});

