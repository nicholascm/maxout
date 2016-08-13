<?php



Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');


Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');

Route::get('/dash', 'DashController@home');

Route::get('/test', function() {
  return view('welcome');
});
