<?php

Route::group(['middleware' => 'web', 'prefix' => 'cab', 'namespace' => 'Modules\Cab\Http\Controllers'], function()
{
    Route::get('/', 'CabController@index');
});
