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
// Route::middleware(['canInstall'])->group(function () {
    Route::get('/', 'FrontendController@default')->name('template');

    Route::get('/pages/{slug}', 'FrontendController@pages')->name('template_pages');

    // Route::get('/politicas-condiciones', 'FrontendController@politicas')->name('template_politicas');
    // Route::get('/app-movil', 'FrontendController@app')->name('template_app');

    Route::get('/plantillas-web', 'FrontendController@index')->name('template_index');
    
    Route::get('/plantillas/{slug}', 'FrontendController@details')->name('template_details');
    Route::get('/plantillas/change/{slug}', 'FrontendController@change')->name('template_change');
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('login/github', 'Auth\LoginController@redirectToProvider');
    Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

    Route::get('server','\Lubusin\Decomposer\Controllers\DecomposerController@index');
    
    Auth::routes();
// });



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

   

    Route::post('templates/{block_id}/blocks/update', 'TemplateController@block_update')->name('template_update');
    Route::get('templates/{id}/blocks/store', 'TemplateController@store')->name('template_store');
    Route::get('templates/{template_id}/blocks', 'TemplateController@blocks')->name('template_blocks');
    Route::get('templates/{template_id}/blocks/delete', 'TemplateController@delete')->name('template_delete');


    Route::post('/excels/import/storage', 'ExcelController@import')->name('excels_import');

    Route::post('/messages/send', 'MessageController@send')->name('messages_send');


    //Ecommerce
    Route::get('/products/details/{product_id}', 'EcommerceController@product_details')->name('e_details');

    //streaming
    Route::get('/accouts/profiles/create', 'StreamingController@create')->name('s_create');
    Route::post('/accouts/profiles/store', 'StreamingController@store')->name('s_store');
    Route::get('/accouts/profiles/{id}', 'StreamingController@index')->name('s_perfiles');
    Route::get('/accouts/profiles/{id}/edit', 'StreamingController@edit')->name('s_edit');
    Route::post('/accouts/profiles/{id}/update', 'StreamingController@update')->name('s_update');
    Route::post('/accouts/profiles/update', 'StreamingController@update')->name('s_update');

    //Caja
    Route::get('showcaja/{caja}','Caja\SeatController@show')->name('showcaja');
    Route::post('storemovimiento','Caja\SeatController@storemov');
    
});


