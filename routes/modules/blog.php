<?php

Route::group(['prefix' => 'catalogos',
                 'as'=>'catalogos.' ], function () {

    Route::namespace('Admin')->group(function () {
        Route::resource('categories','CategoryController');
        Route::get('categories-select','CategoryController@listSelect');


        Route::post('books','BookController@store');
    });
});
    
Route::group(['prefix' => 'blog',
'as'=>'blog.' ], function () {
    Route::get('image-{file}',function($file){
            $url = storage_path() . "/app/public/{$file}";
        if (file_exists($url)) {
            return Response::download($url);
        }
    })->name('imagenes');  
    
    Route::get('comentarios-{path}','Admin\BookController@show')
    ->name('comentarios');
});

