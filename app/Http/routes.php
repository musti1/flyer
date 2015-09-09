<?php

Route::get('/', function () {
    return view('pages.home');
});

Route::resource('flyers', 'FlyerController');

Route::get('{zip}/{street}', 'FlyerController@show');
