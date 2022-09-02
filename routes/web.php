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
    return view('admin.dashboard');
});


Route::get('/admin', function () {
    return view('layouts.test');
});

Route::get('testMail',[App\Http\Controllers\MailController::class,"test_mail"]);



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/add-company',[App\Http\Controllers\Admin\CompanyController::class,'index']);
Route::post('admin/add-company',[App\Http\Controllers\Admin\CompanyController::class,'addCompany'])->name('add_company.store');
Route::get('admin/list-company',[App\Http\Controllers\Admin\CompanyController::class,'listCompany']);
Route::get('companies/edit/{id}',[App\Http\Controllers\Admin\CompanyController::class,'edit']);
Route::post('companies/update',[App\Http\Controllers\Admin\CompanyController::class,'UpadateCompany']);

Route::get('admin/add-event',[App\Http\Controllers\Admin\EventController::class,'index']);
Route::post('admin/add-event',[App\Http\Controllers\Admin\EventController::class,'addEvent'])->name('add_event.store');
Route::get('admin/list-event',[App\Http\Controllers\Admin\EventController::class,'listEvent']);

Route::get('admin/add-landmark',[App\Http\Controllers\Admin\LandmarkController::class,'index']);
Route::post('admin/add-landmark',[App\Http\Controllers\Admin\LandmarkController::class,'addLandmark'])->name('add_landmark.store');
Route::get('admin/list-landmark',[App\Http\Controllers\Admin\LandmarkController::class,'listLandmark']);

Route::get('admin/add-landmark',[App\Http\Controllers\Admin\LandmarkController::class,'index']);
Route::post('admin/add-landmark',[App\Http\Controllers\Admin\LandmarkController::class,'addLandmark'])->name('add_landmark.store');
Route::get('admin/list-landmark',[App\Http\Controllers\Admin\LandmarkController::class,'listLandmark']);

Auth::routes();