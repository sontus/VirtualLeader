<?php

use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MentorController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UsersController;

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
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sign-up', [HomeController::class, 'user_signup'])->name('user-signup');
Route::post('/user-save', [HomeController::class, 'user_save'])->name('user-save');
Route::get('/sign-in', [HomeController::class, 'user_signin'])->name('user-signin');
Route::get('/mentors', [HomeController::class, 'mentors'])->name('mentors');
Route::get('/mentor-details/{id}',[HomeController::class,'mentor_detail'])->name('mentor-detail');


// Backend Controllers

Route::group(['prefix'=>'admin','middleware' => 'auth'],function (){
    Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::resource('category',CategoryController::class);
    Route::resource('mentor',MentorController::class);
    Route::resource('booking',BookingController::class);
    Route::resource('users',UsersController::class);
});
