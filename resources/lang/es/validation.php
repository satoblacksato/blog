<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'pdf'=>'El campo :attribute de ser de extensión pdf.',
    'namefield'=>'El campo :attribute debe ser un campo válido de base de datos Ejemplo: (test_data)',
    'pdferror'=>'El campo :attribute contiene errores intente con otro documento.',
    'accepted'             => 'El campo :attribute debe ser aceptado.',
    'active_url'           => 'El campo :attribute no es una URL válida.',
    'after'                => 'El campo :attribute debe ser una fecha posterior a :date.',
    'alpha'                => 'El campo :attribute sólo puede contener letras.',
    'alpha_dash'           => 'El campo :attribute sólo puede contener letras, números y guiones (a-z, 0-9, -_).',
    'alpha_especial'=>'El campo :attribute sólo puede contener letras, números, guiones y puntos (a-z, 0-9, -_ .).',
    'alpha_especial_numeric'=>'El campo :attribute sólo puede contener letras, números, guiones y puntos (a-z, 0-9, -_ .).',
    'names'=>'El campo :attribute no debe tener caracteres especiales, n&uacute;meros, tíldes, sólo caracteres A-Z a-z.',
    'alpha_num'            => 'El campo :attribute sólo puede contener letras y números.',
    'amount'               => 'El campo :attribute debe tener formato de moneda Ej: 750.45.',
    'promedio'             => 'El campo :attribute debe tener un formato correcto Ej: 9.56',
    'alpha_spaces'         => 'El campo :attribute sólo puede contener letras y espacios.',
    'date_after_or_equal'   =>' El campo :attribute debe ser mayor o igual a la fecha inicial.',
    'array'                => 'El campo :attribute debe ser un array.',
    'before'               => 'El campo :attribute debe ser una fecha anterior a :date.',
    'between'              => [
        'numeric' => 'El campo :attribute debe ser un valor entre :min y :max.',
        'file'    => 'El archivo :attribute debe pesar entre :min y :max kilobytes.',
        'string'  => 'El campo :attribute debe contener entre :min y :max caracteres.',
        'array'   => 'El campo :attribute debe contener entre :min y :max elementos.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'            => 'El campo confirmación de :attribute no coincide.',
    'date'                 => 'El campo :attribute no corresponde con una fecha válida.',
    'date_format'          => 'El campo :attribute no corresponde con el formato de fecha :format.',
    'different'            => 'Los campos :attribute y :other han de ser diferentes.',
    'digits'               => 'El campo :attribute debe ser un número de :digits dígitos.',
    'digits_between'       => 'El campo :attribute debe contener entre :min y :max dígitos.',
    'email'                => 'El campo :attribute no corresponde con una dirección de e-mail válida.',
    'filled'               => 'El campo :attribute es obligatorio.',
    'exists'               => 'El campo :attribute no existe.',
    'image'                => 'El campo :attribute debe ser una imagen.',
    'in'                   => 'El campo :attribute debe ser igual a alguno de estos valores :values',
    'integer'              => 'El campo :attribute debe ser un número entero.',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
    'json'                 => 'El campo :attribute debe ser una cadena de texto JSON válida.',
    'max'                  => [
        'numeric' => 'El campo :attribute debe ser :max como máximo.',
        'file'    => 'El archivo :attribute debe pesar :max kilobytes como máximo.',
        'string'  => 'El campo :attribute debe contener :max caracteres como máximo.',
        'array'   => 'El campo :attribute debe contener :max elementos como máximo.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo de tipo :values.',
    'min'                  => [
        'numeric' => 'El campo :attribute debe tener al menos :min.',
        'file'    => 'El archivo :attribute debe pesar al menos :min kilobytes.',
        'string'  => 'El campo :attribute debe contener al menos :min caracteres.',
        'array'   => 'El campo :attribute no debe contener más de :min elementos.',
    ],
    'not_in'               => 'El campo :attribute seleccionado es invalido.',
    'numeric'              => 'El campo :attribute debe ser un numero.',
    'regex'                => 'El formato del campo :attribute es inválido.',
    'required'             => 'El campo :attribute es obligatorio',
    'required_if'          => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
    'required_with'        => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_without'     => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ningún campo :values están presentes.',
    'same'                 => 'Los campos :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El archivo :attribute debe pesar :size kilobytes.',
        'string'  => 'El campo :attribute debe contener :size caracteres.',
        'array'   => 'El campo :attribute debe contener :size elementos.',
    ],
    'string'               => 'El campo :attribute debe contener solo caracteres.',
    'timezone'             => 'El campo :attribute debe contener una zona válida.',
    'unique'               => 'El elemento :attribute ya está en uso.',
    'url'                  => 'El formato de :attribute no corresponde con el de una URL válida.',
      "recaptcha" => 'El campo captcha :attribute no es correcto.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */



    /*
|--------------------------------------------------------------------------
| Para el Modulo de Becas Docente
|--------------------------------------------------------------------------
*/
    'custom' => [
        'idCountry' => ['required' => 'Pais es un campo obligatorio.'],
        'idTypeGraduate' => ['required' => 'Título de Posgrado al que Postula es un campo obligatorio.'],
        'idAreaKnowledge' => ['required' => 'Área de conocimiento del Posgrado es un campo obligatorio.'],
        'idAreaKnowledge1' => ['required' => 'Área de Conocimiento a la que pertenece la Unidad Acádemica es un campo obligatorio.'],
        'idAreaKnowledge2' => ['required' => 'Área de Conocimiento de las Cátedras que dicta el docente es un campo obligatorio.'],
        'idAreaKnowledge3' => ['required' => 'Área de Conocimiento del Título de tercer Nivel es un campo obligatorio.'],
        'idAreaKnowledge4' => ['required' => 'Área de conocimiento del Título de Cuarto nivel es un campo obligatorio.'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
