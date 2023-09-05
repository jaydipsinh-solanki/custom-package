<?php
Route::group(['namespace' => 'gd\qoutes\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('qoutes', 'QoutesController@index');
});