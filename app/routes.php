<?php

Route::get('/', 'HomeController@ShowAllJobs');

Route::post('/register', 'AuthController@create');

Route::resource('jobs', 'JobCreactorsController');
