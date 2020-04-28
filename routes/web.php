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
    return view('index');
});
Route::get('/contacts', function () {
    return view('contact');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/service-detail/{id}', 'ServiceController@index');
Route::get('your_dream', 'ContactController@your_dream')->name('your_dream');

Route::get('/about', function () {
    return view('about');
});
Route::post('/join_team','ContactController@jointeam')->name('join_team');
Route::post('/reachus','ContactController@reachus')->name('reachus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
