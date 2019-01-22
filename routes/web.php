<?php


Route::get('/login', function(){
    return "login route...";
});

Route::get('/', function () {
    return "Testando!";
});//->middleware('auth');

