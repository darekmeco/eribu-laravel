<?php

Route::group(['middleware' => 'web', 'prefix' => 'boot', 'namespace' => 'Modules\Boot\Http\Controllers'], function()
{
    Route::get('/', 'BootController@index');
});
