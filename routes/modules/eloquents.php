<?php
 Route::group(['prefix' => 'admin', 'as'=>'admin.' ], function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('categories-all',function(){
            return App\Core\Entities\Category::all();
        });
        Route::get('load-data',function(){
        var_dump("CARGANDO USUARIOS");
            factory(App\User::class,50)->create();
            var_dump("CARGANDO CATEGORIAS");
            factory(App\Core\Entities\Category::class,5)->create();
            var_dump("FINALIZACION EXITOSA");
        });
        Route::get('categories-{id}',function($id){
            return App\Core\Entities\Category::findOrFail($id);
        });
    });      
 });

   

