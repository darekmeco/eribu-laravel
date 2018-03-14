<?php

Route::group(['middleware' => 'web', 'prefix' => 'locales', 'namespace' => 'Modules\Locales\Http\Controllers'], function()
{
    Route::get('/', 'LocalesController@index');
});
