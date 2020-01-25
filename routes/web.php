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
            # landing Page SOfware
            return view('LPS');
            break;
        case 'LPR':
            # code...
            # landing Page Restorant
            return view('LPR');
        case 'LPM':
            # code...
            # landing Page Medical
            return view('LPM');
            break;
        case 'LPH':
            # code...
            # landing Page Hotel
            return view('LPH');
            break;
        case 'LPE':
            # code...
            # landing Page Eventos
            return view('LPE');
            break;
        case 'LPB':
            # code...
            # landing Page Band
            return view('LPB');
            break;
        case 'LPC':
            # code...
            # landing Page Contruccion
            return view('LPC');
            break;

        case 'EC1':
            # code...
          
            return view('ecommerce1');
            break;

        case 'EC2':
            # code...
   
            return view('ecommerce2');
            break;

        case 'EC3':
            # code...

            return view('ecommerce3');
                break;
        default:
            # code...
            break;
    }
    
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/politicas', 'FrontendController@politicas')->name('template_politicas');
Route::get('/plantillas', 'FrontendController@plantillas')->name('template_plantillas');
Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/template/{name_short}', 'TemplateController@change')->name('template_change');
});


