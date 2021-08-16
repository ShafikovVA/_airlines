<?php

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
    return view('mainpage');
});

Route::get('/about', function (){
    return view('about');
})->name('About');
Route::post('/about', 'PhoneController@submit')->name('phone-form');


Route::get('/passangers', function (){
    return view('passgers');
})->name('passgers');
Route::get('/delay', function (){
    return view('flightdelay');
})->name('delay');

Route::get('/questions', function (){
    return view('questions');
})->name('questions');

Route::get('/contacts', function(){
    return view('contacts');
})->name('contacts');

Route::get('/registration', function(){
    return view('registration');
})->name('registration');

Route::get('/luggage', function(){
    return view('suitcase');
})->name('luggage');


Route::get('/auth', function () {
    return view('auth');
});
Route::get('/', 'ContactController@allData')->name('AllData');
Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');
