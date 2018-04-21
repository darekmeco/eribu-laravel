<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'api', 'prefix' => 'media', 'namespace' => 'Modules\Media\Http\Controllers'], function() {
    Route::resource('files', 'FilesController');
    Route::post('file', [
        'uses' => 'FileController@store',
        'as' => 'api.media.store'
    ]);
});
