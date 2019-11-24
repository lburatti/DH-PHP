<?php

Route::get('/contatos', 'HomeController@index')->name('contacts.index');
Route::get('/contatos/criar', 'HomeController@create')->name('contacts.create');
Route::post('/contatos', 'HomeController@store')->name('contacts.store');
