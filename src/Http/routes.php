<?php

Route::group(['namespace' => 'Taskforcedev\Faq\Http\Controllers'], function() {
    /* Public Routes */
    Route::get('faq',       ['as' => 'laravel-faq.index',       'uses' => 'FaqController@index']);

    /* Admin Routes */
    Route::get('admin/faq', ['as' => 'laravel-faq.admin.index', 'uses' => 'AdminController@index']);
    Route::post('faq',      ['as' => 'laravel-faq.faq.store',   'uses' => 'AdminController@store']);

    Route::get('admin/faq/install', ['as' => 'laravel-faq.admin.install', 'uses' => 'InstallController@install']);
});
