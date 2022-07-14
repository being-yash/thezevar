<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Vendor\VendorController;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Routes
Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
        Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
        Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
        Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
        Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
        Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
        Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');       
});


//User Routes
Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');    
});


//Vendor Routes
Route::group(['prefix'=>'vendor', 'middleware'=>['isVendor','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[VendorController::class,'index'])->name('vendor.dashboard');
    Route::get('profile',[VendorController::class,'profile'])->name('vendor.profile');
    Route::get('settings',[VendorController::class,'settings'])->name('vendor.settings');
    Route::get('myOrders',[VendorController::class,'myOrders'])->name('myOrders');
    Route::get('myAddresses',[VendorController::class,'myAddresses'])->name('myAddresses');


});
