<?php

Route::group(['middleware' => 'web', 'prefix' => 'international', 'namespace' => 'Modules\International\Http\Controllers'], function()
{
    Route::get('/', 'InternationalController@index');
});
