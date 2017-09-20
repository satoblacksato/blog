<?php

Route::group(['prefix' => 'catalogos',
                 'as'=>'catalogos.' ], function () {

    Route::namespace('Admin')->group(function () {
        Route::resource('categories','CategoryController');
        Route::resource('books','BookController');
    });
});
    

