<?php

Route::resource('jobs', 'JobCreactorsController');

Route::get('/', function()
{
	return View::make('index');
});
