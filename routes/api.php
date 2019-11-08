<?php

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
  Route::post('login', 'LoginController');
  Route::post('logout', 'LogoutController');
  Route::get('me', 'MeController');
});