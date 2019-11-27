<?php

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
  Route::post('login', 'LoginController');
  Route::post('logout', 'LogoutController');
  Route::get('me', 'MeController');
});

Route::prefix('comet')->middleware(['auth:api'])->group(function() {

  Route::get('/scrape', 'CometScrapeController@scrape');

  Route::get('/scrape/{page}', 'CometScrapeController@scrapeModuleListingPage');  
});

Route::resource('projects', 'ProjectsController');

Route::get('search', 'SearchController@index');