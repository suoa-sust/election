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
    return view('test');
});

Route::view('counter','livewire.counter');


Route::get('result', 'ResultController@voteCountingPublicDisplay')->name('result');


// Guest Routes
Route::group(['namespace' => 'Auth', 'middleware' => ['guest']], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login')->name('postLogin');
});

// Auth Routes
Route::group(['middleware' => ['auth']], function () {
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('dashboard', 'DashboardController@dashboardMain')->name('dashboard');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register')->name('postRegister');
//    Route::get('change-password', 'Auth\AuthController@showChangePasswordForm')->name('change-password');
//    Route::post('update-passwordti', 'Auth\AuthController@updatePassword')->name('update-password');


    // Candidate CRUD Routes
    Route::get('candidate', 'CandidateController@index')->name('candidate.index');
    Route::get('candidate/create', 'CandidateController@create')->name('candidate.create');
    Route::post('candidate/store', 'CandidateController@store')->name('candidate.store');
    Route::get('candidate/{id}/show', 'CandidateController@show')->name('candidate.show');
    Route::get('candidate/{id}/edit', 'CandidateController@edit')->name('candidate.edit');
    Route::put('candidate/{id}/update', 'CandidateController@update')->name('candidate.update');
    Route::delete('candidate/{id}/delete', 'CandidateController@delete')->name('candidate.delete');

    // Year CRUD Routes
    Route::get('year', 'YearController@index')->name('year.index');
    Route::get('year/create', 'YearController@create')->name('year.create');
    Route::post('year/store', 'YearController@store')->name('year.store');
//    Route::get('year/{id}/show', 'YearController@show')->name('year.show');
    Route::get('year/{id}/edit', 'YearController@edit')->name('year.edit');
    Route::put('year/{id}/update', 'YearController@update')->name('year.update');
    Route::delete('year/{id}/delete', 'YearController@destroy')->name('year.delete');

    // Seat CRUD Routes
    Route::get('seat', 'SeatController@index')->name('seat.index');
    Route::get('seat/create', 'SeatController@create')->name('seat.create');
    Route::post('seat/store', 'SeatController@store')->name('seat.store');
    Route::get('seat/{id}/show', 'SeatController@show')->name('seat.show');
    Route::get('seat/{id}/edit', 'SeatController@edit')->name('seat.edit');
    Route::put('seat/{id}/update', 'SeatController@update')->name('seat.update');
    Route::get('seat/{id}/delete', 'SeatController@destroy')->name('seat.delete');


    //Search Routes
    Route::get('seat/search', 'SeatController@search')->name('seat.search');



    Route::get('vote', 'VoteController@voteCountPage')->name('vote.count');
});






require __DIR__.'/auth.php';
