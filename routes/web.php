<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ButterflyStatsController;

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


Route::any('/',[HomeController::class,'index']);
Route::any('/models',[ModelsController::class,'model_view']);
Route::any('individual/{id}',[ModelsController::class,'individual']);
Route::any('apply',[ModelsController::class,'apply']);
Route::any('contact',[ModelsController::class,'contact']);
Route::post('contact_form',[ModelsController::class,'contact_form']);
Route::any('delete_message/{id}',[AdminController::class,'delete_message']);
Route::post('application_form',[ModelsController::class,'application_form']);
Route::any('models_index',[ModelsController::class,'model_index']);
Route::get('butterfly',[ModelsController::class,'butterflies']);
Route::any('butterfly_add/{id}',[AdminController::class,'butterfly_add']);
Route::get('login',[AdminController::class,'login_admin']);
Route::any('/verify_user',[AdminController::class,'login_logic']);


//admin begins
Route::group(['middleware'=>'auth'],function(){
    Route::get('stats',[ButterflyStatsController::class,'stats']);
    Route::post('post_stats',[ButterflyStatsController::class,'add_stats']);
    Route::get('show_stats/{id}',[ButterflyStatsController::class,'show_stats']);
    Route::post('edit_stats/{id}',[ButterflyStatsController::class,'edit_stats']);
    Route::get('contact_received',[AdminController::class,'contact_received']);
    Route::get('admin_dashboard',[AdminController::class,'admin_dashboard']);
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
    Route::any('add_models',[AdminController::class,'add_model']);
    Route::any('store_models',[AdminController::class,'store_model']);
    Route::any('edit_model/{id}',[AdminController::class,'edit']);
    Route::any('delete_model/{id}',[AdminController::class,'delete_model']);
    Route::any('update_model/{id}',[AdminController::class,'update_model']);

});



