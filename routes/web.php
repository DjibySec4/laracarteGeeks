<?php

use App\Mail\ContactMessageCreated;

Route::get('/', 'PagesController@home')->name('home');

Route::get('/test-mail', function(){
    return new ContactMessageCreated('Djiby', 'djibysec4@gmail.com', 'Je vous remercie pour laracarte');
} );

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'ContactController@create')->name('contact');

Route::post('/contact', 'ContactController@store')->name('contact');
