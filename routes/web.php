<?php


Route::get('/login', function(){
    return "login route...";
});

Route::get('/', function () {
    return view('home');
})->middleware('auth');

