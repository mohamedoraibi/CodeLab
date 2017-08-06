<?php

Route::get('/', 'PagesController@getHome');


Route::get('/videos/{id?}/{number?}', 'PagesController@getvideos2');

Route::get('/about', 'PagesController@getabout');
//
//
//Route::get('/', function () {
//    $names = ['Ali', "sabri", 'jasim'];
//    return view('pages.day101', compact(  'names'));
//});
//Route::get('/', function () {
//    $names = ['Ali', "sabri", 'jasim'];
//    return view('about', compact(  'names'));
//});


//Route::get('/videos', 'PagesController@getvideos');
//Route::get('/', 'PagesController@getHome');


//Route::get('/', function () {
//    return view('pages.home');
//});

//Route::get('/videos', function () {
//    return view('pages.videos');
//});
//
//
//Route::get('/about', function () {
//    $var = false;
//    $var2 = "HELLO ";
//    $names = ['Ali', "sabri", 'jasim'];
//    return view('about', compact('var', 'var2', 'names'));
//});

//
//Route::get('/', function () {
//    return view('welcome');
//});