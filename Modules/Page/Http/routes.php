<?php

Route::group(['middleware' => 'api', 'prefix' => 'page', 'namespace' => 'Modules\Page\Http\Controllers'], function() {
    Route::resource('pages', 'PageController');
});
