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
    return redirect()->route('dashboard');
});

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
//    Route::post('update-password', 'Auth\AuthController@updatePassword')->name('update-password');


//    // Blog CRUD Routes
//    Route::get('blogs', 'BlogController@index')->name('blog.index');
////    Route::get('blog/create', 'BlogController@create')->name('blog.create');
////    Route::post('blog/store', 'BlogController@store')->name('blog.store');
////    Route::get('blog/{id}/show', 'BlogController@show')->name('blog.show');
////    Route::get('blog/{id}/edit', 'BlogController@edit')->name('blog.edit');
////    Route::put('blog/{id}/update', 'BlogController@update')->name('blog.update');
////    Route::delete('blog/{id}/delete', 'BlogController@delete')->name('blog.delete');
///

    Route::get('year', 'YearController@showYearForm')->name('yearInput');
    Route::post('year', 'RegisterController@register')->name('postYear');


});


require __DIR__.'/auth.php';
