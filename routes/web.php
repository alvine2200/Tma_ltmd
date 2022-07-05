<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\AdminController;

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
/*
Route::get('/', function () {
    return view('index');
});
*/

Route::any('/',[HomeController::class,'index']);
Route::any('models',[ModelsController::class,'models']);
Route::any('individual',[ModelsController::class,'individual']);
Route::any('apply',[ModelsController::class,'apply']);
Route::any('contact',[ModelsController::class,'contact']);
Route::post('contact_form',[ModelsController::class,'contact_form']);
Route::post('application_form',[ModelsController::class,'application_form']);

//admin begins
Route::get('admin_dashboard',[AdminController::class,'admin_dashboard']);
Route::get('/login',[AdminController::class,'login_admin']);
Route::any('/verify_user',[AdminController::class,'login_logic']);
Route::get('/end',[AdminController::class,'logout_admin']);
Route::any('check',[AdminController::class,'check_applications']);
Route::any('destroy/{id}',[AdminController::class,'delete_application']);
Route::any('admit/{id}',[AdminController::class,'approve_application']);
Route::any('approve/{id}',[AdminController::class,'approve']);
Route::any('disapprove/{id}',[AdminController::class,'disapprove']);
Route::any('view_applications/{id}',[AdminController::class,'view_application']);
Route::any('view_models',[AdminController::class,'view_model']);
Route::any('view_photos/{id}',[AdminController::class,'view_photo']);
Route::any('photos',[AdminController::class,'view_photo_table']);
Route::any('add_photos',[AdminController::class,'add_photo']);
Route::any('destroy_photos/{id}',[AdminController::class,'destroy_photo']);
Route::any('model_photos/{id}',[AdminController::class,'models_photo']);


