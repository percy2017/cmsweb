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
    $template = setting('site.template');
    switch ($template) {
        case 'LPS':
            # code...
            return view('welcome');
            break;
        case 'LPR':
            # code...
            return view('LPR');
        case 'LPM':
            # code...
            return view('LPM');
            break;
        default:
            # code...
            break;
    }
    
});

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
