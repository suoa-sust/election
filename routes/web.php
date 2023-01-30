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

Route::get('/', 'FrontController@home')->name('home');

Route::view('counter','livewire.counter');

Route::resource('notice', NoticeController::class);

//Route::get('live2', 'ResultController@voteCountingPublicDisplay')->name('result');
Route::get('live', 'ResultController@live')->name('live');


Route::get('result', 'ResultController@voteResults')->name('past.result');
//Route::get('result2', 'ResultController@voteResults2')->name('past.result2');


Route::get('seats', 'FrontController@seats')->name('public.seats');

//Route::get('committee', 'ResultController@committee')->name('public.committee'); // will be in main website

Route::get('ec_temp', 'FrontController@commission')->name('public.commission');
Route::get('ec2022_temp', 'FrontController@commission2022')->name('public.commission2022');
Route::get('developers', 'FrontController@developers')->name('public.developers');
Route::get('gallery', 'FrontController@gallery')->name('public.gallery');

Route::get('candidates', 'FrontController@candidates')->name('public.candidates');
Route::get('all-notice', 'FrontController@notices')->name('public.notices');




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
    Route::get('candidate', 'CandidateController@indexByYearBySeat')->name('candidate.index');
//    Route::get('candidate', 'CandidateController@indexByYearBySeat')->name('candidate.search');
    Route::get('candidate/create', 'CandidateController@create')->name('candidate.create');
    Route::post('candidate/store', 'CandidateController@store')->name('candidate.store');
    Route::get('candidate/{id}/show', 'CandidateController@show')->name('candidate.show');
    Route::get('candidate/{id}/edit', 'CandidateController@edit')->name('candidate.edit');
    Route::put('candidate/{id}/update', 'CandidateController@update')->name('candidate.update');
    Route::delete('candidate/{id}/delete', 'CandidateController@destroy')->name('candidate.delete');

    // Voter Crud
    Route::get('/voter', 'VoterController@index')->name('voter.index');
    Route::get('/voter/create', 'VoterController@create')->name('voter.create');
    Route::post('/voter', 'VoterController@store')->name('voter.store');
    Route::get('/voter/{id}', 'VoterController@show')->name('voter.show');
    Route::get('/voter/{id}/edit', 'VoterController@edit')->name('voter.edit');
    Route::put('/voter/{id}', 'VoterController@update')->name('voter.update');
    Route::delete('/voter/{id}', 'VoterController@destroy')->name('voter.delete');

    // EC CRUD Routes
    Route::get('ec', 'ElectionCommissionController@index')->name('ec.index');
    Route::get('ec/create', 'ElectionCommissionController@create')->name('ec.create');
    Route::post('ec/store', 'ElectionCommissionController@store')->name('ec.store');
    Route::get('ec/{id}/edit', 'ElectionCommissionController@edit')->name('ec.edit');
    Route::put('ec/{id}/update', 'ElectionCommissionController@update')->name('ec.update');
    Route::delete('ec/{id}/delete', 'ElectionCommissionController@destroy')->name('ec.delete');
//    Route::get('ec/search', 'ElectionCommissionController@search')->name('ec.search');
//    Route::post('search/ec', 'ElectionCommissionController@searchYear')->name('details.ec.search');
    //Route::get('ec/search/result', 'ElectionCommissionController@searchResult')->name('ec.search.result');
    //Route::get('ec/{id}/show', 'ElectionCommissionController@show')->name('ec.show');

    // Year CRUD Routes
    Route::get('year', 'YearController@index')->name('year.index');
    Route::get('year/create', 'YearController@create')->name('year.create');
    Route::post('year/store', 'YearController@store')->name('year.store');
    Route::get('year/{id}/edit', 'YearController@edit')->name('year.edit');
    Route::put('year/{id}/update', 'YearController@update')->name('year.update');
    Route::delete('year/{id}/delete', 'YearController@destroy')->name('year.delete');
    Route::get('year/search', 'YearController@search')->name('year.search');
    Route::post('search/year', 'YearController@searchYear')->name('details.year.search');
    //Route::get('year/search/result', 'YearController@searchResult')->name('year.search.result');
    //Route::get('year/{id}/show', 'YearController@show')->name('year.show');

    // User CRUD
    Route::get('user', 'UserController@index')->name('user.index');
    Route::get('change-password', 'UserController@changePasswordForm')->name('change.password');
    Route::post('change-password', 'UserController@changePassword')->name('post.change.password');



    // Seat CRUD Routes
    Route::get('seat', 'SeatController@index')->name('seat.index');
    Route::get('seat/create', 'SeatController@create')->name('seat.create');
    Route::post('seat/store', 'SeatController@store')->name('seat.store');
    Route::get('seat/{id}/show', 'SeatController@show')->name('seat.show');
    Route::get('seat/{id}/edit', 'SeatController@edit')->name('seat.edit');
    Route::put('seat/{id}/update', 'SeatController@update')->name('seat.update');
    Route::delete('seat/{id}/delete', 'SeatController@destroy')->name('seat.delete');

    // Notice CRUD Routes
    Route::get('notice', 'NoticeController@index')->name('notice.index');
    Route::get('notice/create', 'NoticeController@create')->name('notice.create');
    Route::post('notice/store', 'NoticeController@store')->name('notice.store');
    Route::get('notice/{id}/show', 'NoticeController@show')->name('notice.show');
    Route::get('notice/{id}/edit', 'NoticeController@edit')->name('notice.edit');
    Route::put('notice/{id}/update', 'NoticeController@update')->name('notice.update');
    Route::delete('notice/{id}/{file}/delete', 'NoticeController@destroy')->name('notice.destroy');

    //Search Routes
    Route::get('seat/find/{seat_name}', 'SeatController@findBySeat')->name('seat.find');



    Route::get('vote', 'VoteController@voteCountPage')->name('vote.count');
    Route::get('vote/{id}/update', 'VoteController@voteUpdate')->name('vote.update');

    Route::get('admin-gallery', 'GalleryController@uploadPhoto')->name('gallery.create');

    Route::get('/votestatus', 'VoterController@votestatus')->name('votestatus');
    Route::post('/votestatus/update', 'VoterController@updatevotestatus')->name('updatevotestatus');
});








require __DIR__.'/auth.php';
