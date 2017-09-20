<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"         => ":attribute debe ser aceptado.",
    "active_url"       => ":attribute no es una URL válida.",
    "after"            => ":attribute debe ser una fecha posterior a :date.",
    "alpha"            => ":attribute solo debe contener letras.",
    "alpha_dash"       => ":attribute solo debe contener letras, números y guiones.",
    "alpha_num"        => ":attribute solo debe contener letras y números.",
    "array"            => ":attribute debe ser un conjunto.",
    "before"           => ":attribute debe ser una fecha anterior a :date.",
    "between"          => [
        "numeric" => ":attribute tiene que estar entre :min - :max.",
        "file"    => ":attribute debe pesar entre :min - :max kilobytes.",
        "string"  => ":attribute tiene que tener entre :min - :max caracteres.",
        "array"   => ":attribute tiene que tener entre :min - :max ítems.",
    ],
    "boolean"          => "El campo :attribute debe tener un valor verdadero o falso.",
    "confirmed"        => "La confirmación de :attribute no coincide.",
    "date"             => ":attribute no es una fecha válida.",
    "date_format"      => ":attribute no corresponde al formato :format.",
    "different"        => ":attribute y :other deben ser diferentes.",
    "digits"           => ":attribute debe tener :digits dígitos.",
    "digits_between"   => ":attribute debe tener entre :min y :max dígitos.",
    "email"            => ":attribute no es un correo válido",
    "exists"           => ":attribute es inválido.",
    "filled"           => "El campo :attribute es obligatorio.",
    "image"            => ":attribute debe ser una imagen.",
    "in"               => ":attribute es inválido.",
    "integer"          => ":attribute debe ser un número entero.",
    "ip"               => ":attribute debe ser una dirección IP válida.",
    "max"              => [
        "numeric" => ":attribute no debe ser mayor a :max.",
        "file"    => ":attribute no debe ser mayor que :max kilobytes.",
        "string"  => ":attribute no debe ser mayor que :max caracteres.",
        "array"   => ":attribute no debe tener más de :max elementos.",
    ],
    "mimes"            => ":attribute debe ser un archivo con formato: :values.",
    "min"              => [
        "numeric" => "El tamaño de :attribute debe ser de al menos :min.",
        "file"    => "El tamaño de :attribute debe ser de al menos :min kilobytes.",
        "string"  => ":attribute debe contener al menos :min caracteres.",
        "array"   => ":attribute debe tener al menos :min elementos.",
    ],
    "not_in"           => ":attribute es inválido.",
    "numeric"          => ":attribute debe ser numérico.",
    "regex"            => "El formato de :attribute es inválido.",
    "required"         => "El campo :attribute es obligatorio.",
    "required_if"      => "El campo :attribute es obligatorio cuando :other es :value.",
    "required_with"    => "El campo :attribute es obligatorio cuando :values está presente.",
    "required_with_all" => "El campo :attribute es obligatorio cuando :values está presente.",
    "required_without" => "El campo :attribute es obligatorio cuando :values no está presente.",
    "required_without_all" => "El campo :attribute es obligatorio cuando ninguno de :values estén presentes.",
    "same"             => ":attribute y :other deben coincidir.",
    "size"             => [
        "numeric" => "El tamaño de :attribute debe ser :size.",
        "file"    => "El tamaño de :attribute debe ser :size kilobytes.",
        "string"  => ":attribute debe contener :size caracteres.",
        "array"   => ":attribute debe contener :size elementos.",
    ],
    "string"           => "El :attribute deben ser caracteres.",
    "timezone"         => "El :attribute debe ser una zona válida.",
    "unique"           => "El :attribute ya ha sido registrado.",
    "url"              => "El formato :attribute es inválido.",

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
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

	// Aqui se declaran todos los atributos o campos de la tabla para que no aparescan los de la BD
    'attributes' => [
        //Traducciones para tabla Cargo
            //'car_id',
            //'car_tiempo',
            'car_descripcion' => 'nombre del cargo',

        //Traducciones para tabla Causa
            'cau_codigo',
            //'cau_tiempo',
            'cau_nombre' => 'nombre de la Causa',
            'cau_activo',

        //Traducciones para tabla Empresa
            'emp_rut' => 'Rut de la empresa',
            //'emp_tiempo',
            'emp_nombre_corto' => 'nombre corto',
            'emp_razon_social' => 'razón social',
            'emp_ciudad' => 'ciudad',
            'emp_telefono' => 'teléfono',
            'emp_email' => 'correo',
            'emp_representante' => 'representante',
            'emp_representante_telefono' => 'teléfono del representante',
            'emp_representante_email' => 'Correo del representante',
            'emp_clave' => 'clave',
            'emp_logo' => 'logo',
            //'emp_activo',

        //Traducciones para tabla Evento
            'eve_id' => 'Id del evento',
            //'eve_tiempo',
            'eve_android' => 'dispositivo android',  
            'eve_geo_x' => 'coordenada X', 
            'eve_geo_y' => 'coordenada Y',    
            'eve_id_jornada' => 'Id de Jornada',   
            'eve_status_jornada' ,   
            'eve_status_operacion',     
            'eve_tiempo_operacion' => 'tiempo de operación',     
            'eve_tiempo_detenido' => 'tiempo detenido',  
            'eve_duracion' => 'duración',     
            'eve_causa' => 'causa',    
            'eess_rut' => 'Rut de la empresa',     
            'eve_maquina' ,  
            'eve_fundo',    
            'eve_faena',

        //Traducciones para tabla Faena
            'fae_id' => 'Id de la faena',
            //'fae_tiempo',
            'fae_nombre' => 'nombre de la faena',
            //'fae_activo',

        //Traducciones para tabla Fundo
            'fun_id' => 'Id del fundo',
            // 'fun_tiempo',
            'fun_nombre' => 'nombre del fundo', 
            'fun_comuna' => 'comuna',
            'fun_sector' => 'sector',
            'fun_region' => 'región',
            //'fun_activo',

        //Traducciones para tabla Maquina
            //'maq_id',
            'maq_tipo' => 'tipo de maquina',
            //'maq_activo',
        
        //Traducciones para tabla Trabajador
            //'tra_id',
            //'tra_tiempo',
            'tra_rut' => 'rut del trabajador',
            'tra_dv' => 'digito verificador',
            'tra_nombres' => 'nombres',
            'tra_apellidos' => 'apellidos',
            'tra_fecha_nacimiento' => 'fecha de nacimiento',
            'tra_vencimiento_corma' => 'vencimiento de corma',
            'tra_vencimiento_examen' => 'vencimiento de examen',
            'tra_licencia_conducir' => 'licencia de conducir',
            'tra_vencimiento_licencia_conducir' => 'vencimiento de la licencia de conducir',
            'tra_email' => 'correo',
            //'tra_activo'
    ],


];