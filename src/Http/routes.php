<?php

Route::prefix(config('nomadcms.url_prefix'))->group(function() {
    Route::get('/login', 'Nomad\NomadCMS\Http\Admin\LoginController@login')->name('admin.login');
});
