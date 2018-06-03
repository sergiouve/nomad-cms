<?php

Route::group(function() {
    Route::get('/login', 'Nomad\NomadCMS\Http\Admin\LoginController@login')->name('admin.login');
});
