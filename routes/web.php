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
Route::middleware(['canInstall'])->group(function () {
    Route::get('/', 'FrontendController@default')->name('template');
    Route::get('/politicas-condiciones', 'FrontendController@politicas')->name('template_politicas');
    Route::get('/plantillas', 'FrontendController@index')->name('template_index');
    Route::get('/plantillas/{slug}', 'FrontendController@details')->name('template_details');
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('login/github', 'Auth\LoginController@redirectToProvider');
    Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');
    
    Auth::routes();
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('/template/update/{id}', 'TemplateController@update')->name('template_update');
    Route::get('/template/{name_short}', 'TemplateController@change')->name('template_change');
    Route::get('/template/json/{block_id}', 'TemplateController@json')->name('template_json');
  
});


