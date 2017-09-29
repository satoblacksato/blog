<?php

Route::group(['prefix' => 'catalogos',
                 'as'=>'catalogos.' ], function () {

    Route::namespace('Admin')->group(function () {

        Route::group(['middleware' => 'auth'], function () {
            Route::group(['middleware' => 'category_actions:LUNES_MARTES'], function () {
                 Route::resource('categories','CategoryController');
            });
            
            Route::get('categories-select','CategoryController@listSelect');
            Route::get('categories-tables','CategoryController@dataTables');

            Route::post('books','BookController@store');
        });
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

Route::get('mail',function(){
    Mail::send(new \App\Mail\BookMail('uno','dos','tres'));
   //return new \App\Mail\BookMail('uno','dos','tres');
});


Route::get('auth/{provider}', 
    'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');


