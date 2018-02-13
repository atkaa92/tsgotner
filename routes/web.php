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

Route::get('/login', function () {
    return view('auth.login');
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
        Route::get('/', 'PagesController@rooms');
        Route::get('/room/{slug}', 'PagesController@room');
    }
);


Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth',]], function() {
    Route::get('/', 'HomeController@index')->name('home');

    Route::post('/add-feature', 'Admin\FeaturesController@addNewFeature');
    Route::post('/edit-feature/{id}', 'Admin\FeaturesController@editFeature');
    Route::post('/delete-feature/{id}', 'Admin\FeaturesController@deleteFeature');

    Route::get('/rooms', 'Admin\RoomsController@rooms');
    Route::get('/new-room', 'Admin\RoomsController@someRoom');
    Route::get('/some-room/{id}', 'Admin\RoomsController@someRoom');
    Route::post('/add-room/{id?}', 'Admin\RoomsController@addRoomFunc');
    Route::post('/remove-room/{id?}', 'Admin\RoomsController@removeRoomFunc');
});
