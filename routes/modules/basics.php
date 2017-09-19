<?php

Route::get('/saludar',function(){
    //var_dump('hola');
    //dd('sumar');
    return "prueba de view";
});

Route::get('/sumar/{operador1}/{operador2}',
        function($operador1,$operador2){
            return $operador1 + $operador2;
        }
);

Route::get('/sumar-opcional/{operador1}/{operador2?}',
function($operador1,$operador2=0){
    return $operador1 + $operador2;
}
);

Route::get('/array/{numero}',
function($numero){
    $array=[];
    for($i=0;$i<$numero;$i++){
        $array[]=uniqid();
    }
    return response()->json($array);
}
)->where(['numero'=>'[0-9]+']);