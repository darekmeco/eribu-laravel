<?php

Route::group(['middleware' => 'api', 'prefix' => 'media', 'namespace' => 'Modules\Media\Http\Controllers'], function() {
    Route::resource('files', 'FilesController');
});
