<?php

Route::group(['prefix' => 'catalogos',
                 'as'=>'catalogos.' ], function () {

    Route::namespace('Admin')->group(function () {
        Route::resource('categories','CategoryController');
        Route::get('categories-select','CategoryController@listSelect');


        Route::resource('books','BookController');
    });
});
    

