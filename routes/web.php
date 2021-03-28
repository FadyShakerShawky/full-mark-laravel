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
    return view('index' , ["title" => "Home"]);
});
Route::get('/about-us', function () {
    return view('about-us' , ["title" => "About us"]);
});
Route::get('/contact-us', function () {
    return view('contact-us' , ["title" => "Contact us"]);
});
Route::get('/course-info', function () {
    return view('course-info' , ["title" => "Course info"]);
});
Route::get('/privacy&policy', function () {
    return view('privacy&policy' , ["title" => "Privacy&policy"]);
});
Route::get('/teacher-profile', function () {
    return view('teacher-profile' , ["title" => "Teacher profile"]);
});
Route::get('/search-courses', function () {
    return view('search-courses' , ["title" => "Search courses"]);
});
Route::get('/sign-in', function () {
    return view('sign-in' , ["title" => "Sign in"]);
});
Route::get('/sign-up', function () {
    return view('sign-up' , ["title" => "Sign up"]);
});
Route::get('/payment', function () {
    return view('payment' , ["title" => "payment"]);
});
Route::get('/lecture-live', function () {
    return view('lecture-live' , ["title" => "Lecture live"]);
});