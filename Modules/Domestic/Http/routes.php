<?php

Route::group(['middleware' => 'web', 'prefix' => 'domestic', 'namespace' => 'Modules\Domestic\Http\Controllers'], function()
{
    Route::get('/', 'DomesticController@index');
});
