<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TeacherProfileController;
use App\Http\Controllers\Auth\LoginController;

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
Auth::routes();

Route::get('/', function () {
    return view('index' , ["title" => "Home"]);
})->name('index');

Route::get('/',[TeacherProfileController::class, 'index1']);

Route::get('/about-us', function () {
    return view('about-us' , ["title" => "About us"]);
})->name("about-us");
Route::get('/contact-us', function () {
    return view('contact-us' , ["title" => "Contact us"]);
});
Route::get('/course-info', function () {
    return view('course-info' , ["title" => "Course info"]);
});
Route::get('/privacy&policy', function () {
    return view('privacy&policy' , ["title" => "Privacy&policy"]);
});
Route::get('/teacher-profile/{id}',[TeacherProfileController::class, 'show'])->name("teacher-profile");


Route::get('/search-courses', [App\Http\Controllers\CourseTeacherController::class , 'searchByName'])->name('courses.search');
// Route::get('/sign-in', function () {
//     return view('sign-in' , ["title" => "Sign in"]);
// });
// Route::get('/sign-up', function () {
//     return view('sign-up' , ["title" => "Sign up"]);
// });

Route::get('/payment', [PaymentController::class, 'index'])->middleware('auth');

Route::get('/lecture-live', function () {
    return view('lecture-live' , ["title" => "Lecture live"]);
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// login with facebook
Route::get('/login/facebook', [LoginController::class, 'redirectToFacebbok']);

Route::get('/login/facebook/callback', [LoginController::class, 'handleFacebbokCallback']);


Route::get('/courses/search', [App\Http\Controllers\CourseTeacherController::class , 'extinsiveSearch']);
//login with github
Route::get('/sign-in/github', 'App\Http\Controllers\LoginController@github');

Route::get('/sign-in/github/redirect', 'App\Http\Controllers\LoginController@githubRedirect');


//login with google
Route::get('/login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);


//Rating system
