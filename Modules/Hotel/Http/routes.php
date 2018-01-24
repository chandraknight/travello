<?php

Route::group(['middleware' => 'web', 'prefix' => 'hotel', 'namespace' => 'Modules\Hotel\Http\Controllers'], function()
{
    Route::get('/', 'HotelController@index');
});
