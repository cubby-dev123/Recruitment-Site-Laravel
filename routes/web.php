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
Route::get('/', [App\Http\Controllers\RuleController::class, 'index'])->name('rule');
Route::get('/top', [App\Http\Controllers\WelcomeController::class, 'index'])->name('top');
Route::get('/thank', [App\Http\Controllers\WelcomeController::class, 'thank'])->name('thank');

Auth::routes();

Route::resource('/job', App\Http\Controllers\JobController::class);
Route::resource('/item', App\Http\Controllers\ItemController::class);
Route::resource('/form', App\Http\Controllers\FormController::class);
Route::resource('/rule', App\Http\Controllers\RuleController::class);

Route::post('/user/store', 'App\Http\Controllers\UserController@store')->name('user.store');
Route::post('/user/store/csv_upload', 'App\Http\Controllers\UserController@csv_upload')->name('user.csv_upload');
Route::post('/user/update', 'App\Http\Controllers\UserController@update')->name('user.update');
Route::post('/user/delete', 'App\Http\Controllers\UserController@delete')->name('user.delete');
Route::post('/jobManage/store', 'App\Http\Controllers\JobManageController@store')->name('jobManage.store');
Route::post('/jobManage/update', 'App\Http\Controllers\JobManageController@update')->name('jobManage.update');
Route::post('/jobManage/delete', 'App\Http\Controllers\JobManageController@delete')->name('jobManage.delete');
Route::post('/degreeManage/store', 'App\Http\Controllers\DegreeManageController@store')->name('degreeManage.store');
Route::post('/degreeManage/update', 'App\Http\Controllers\DegreeManageController@update')->name('degreeManage.update');
Route::post('/degreeManage/delete', 'App\Http\Controllers\DegreeManageController@delete')->name('degreeManage.delete');
Route::post('/basicManage/store', 'App\Http\Controllers\BasicManageController@store')->name('basicManage.store');
Route::post('/basicManage/store/picture_upload', 'App\Http\Controllers\BasicManageController@picture_upload')->name('basicManage.picture_upload');
Route::post('/basicManage/update', 'App\Http\Controllers\BasicManageController@update')->name('basicManage.update');
Route::post('/basicManage/edit', 'App\Http\Controllers\BasicManageController@edit')->name('basicManage.edit');
Route::post('/basicManage/delete', 'App\Http\Controllers\BasicManageController@delete')->name('basicManage.delete');
Route::post('/basicManage/show', 'App\Http\Controllers\BasicManageController@show')->name('basicManage.show');
Route::post('/mainInfo/store', 'App\Http\Controllers\MainInfoController@store')->name('mainInfo.store');
Route::post('/mainInfo/update', 'App\Http\Controllers\MainInfoController@update')->name('mainInfo.update');
Route::post('/mainInfo/extend', 'App\Http\Controllers\MainInfoController@extend')->name('mainInfo.extend');
Route::post('/mainInfo/show', 'App\Http\Controllers\MainInfoController@show')->name('mainInfo.show');
Route::post('/form/sendMail', 'App\Http\Controllers\FormController@sendMail')->name('form.sendMail');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jobManage', [App\Http\Controllers\JobManageController::class, 'index'])->name('jobManage');
Route::get('/degreeManage', [App\Http\Controllers\DegreeManageController::class, 'index'])->name('degreeManage');
Route::get('/basicManage', [App\Http\Controllers\BasicManageController::class, 'index'])->name('basicManage');
Route::get('/mainInfo', [App\Http\Controllers\MainInfoController::class, 'index'])->name('mainInfo');
Route::get('/expire', [App\Http\Controllers\ExpireController::class, 'index'])->name('expire');
