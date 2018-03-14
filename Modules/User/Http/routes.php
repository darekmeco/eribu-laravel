<?php

Route::group(['middleware' => 'api', 'prefix' => 'user', 'namespace' => 'Modules\User\Http\Controllers'], function() {
    Route::resource('users', 'UserController');
});
