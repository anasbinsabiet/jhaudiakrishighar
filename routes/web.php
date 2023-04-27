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

// Route::get('/', function () {
//     return view('home');

Route::post('users', [App\Http\Controllers\DashboardPagesController::class, 'update'])->name('application.update');
Route::get('changed-data', [App\Http\Controllers\DashboardPagesController::class, 'changedData']);
Route::post('deleted-data', [App\Http\Controllers\DashboardPagesController::class, 'deletedData']);

Route::get('application-form', [App\Http\Controllers\PageController::class, 'application_form'])->name('application.form');
Route::post('application-store', [App\Http\Controllers\PageController::class, 'application_store'])->name('application.from.store');

Route::get('birth', [App\Http\Controllers\PageController::class, 'birth'])->name('birth');
Route::get('death', [App\Http\Controllers\PageController::class, 'death'])->name('death');
Route::get('number', [App\Http\Controllers\PageController::class, 'number'])->name('number');
Route::get('admit', [App\Http\Controllers\PageController::class, 'admit'])->name('admit');
Route::get('certificate', [App\Http\Controllers\PageController::class, 'certificate'])->name('certificate');
Route::get('registration', [App\Http\Controllers\PageController::class, 'registration'])->name('registration');
Route::get('status', [App\Http\Controllers\PageController::class, 'status'])->name('statuse');
Route::get('reset', [App\Http\Controllers\PageController::class, 'reset'])->name('reset');
Route::get('complain', [App\Http\Controllers\PageController::class, 'complain'])->name('complain');
Route::post('check/status', [App\Http\Controllers\PageController::class, 'check_status'])->name('check.status');

Auth::routes();
Route::group(['middleware' => 'auth'], function()
{
    Route::get('profile', [App\Http\Controllers\PageController::class, 'profile'])->name('profile');
    Route::post('user/update', [App\Http\Controllers\PageController::class, 'userUpddate'])->name('user.upddate');
    Route::post('astatus/change', [App\Http\Controllers\PageController::class, 'astatuschange'])->name('astatus.change');
    Route::post('adm/change', [App\Http\Controllers\PageController::class, 'admchange'])->name('adm.change');
    Route::get('applications', [App\Http\Controllers\PageController::class, 'applications'])->name('applications');
    Route::get('user/application/{id}', [App\Http\Controllers\PageController::class, 'invoice'])->name('user.invoice');
    Route::get('user/applicationdetails/{id}', [App\Http\Controllers\PageController::class, 'invoicedetails'])->name('user.invoicedetails');
});
Route::group(['middleware' => 'admin'], function()
{   
    Route::get('/', [App\Http\Controllers\DashboardPagesController::class, 'index'])->name('home');
    Route::get('home', [App\Http\Controllers\DashboardPagesController::class, 'index'])->name('home');
    Route::get('users', [App\Http\Controllers\DashboardPagesController::class, 'users'])->name('users');
    Route::get('admin/applications', [App\Http\Controllers\DashboardPagesController::class, 'applications'])->name('admin.applications');
    Route::get('admin/application/{id}', [App\Http\Controllers\DashboardPagesController::class, 'application'])->name('admin.application');
    Route::get('admin/applicationd/{id}', [App\Http\Controllers\DashboardPagesController::class, 'invoice'])->name('admin.invoice');
});