<?php

namespace Productivity;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    
    protected $table = 'oee_empresa';
    protected $primaryKey = 'emp_rut';
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'emp_rut',
    	'emp_tiempo',
    	'emp_nombre_corto',
    	'emp_razon_social',
    	'emp_ciudad',
    	'emp_telefono',
    	'emp_email',
    	'emp_representante',
    	'emp_representante_telefono',
    	'emp_representante_email',
    	'emp_clave',
    	'emp_logo',
    	'emp_activo'
    ];

}
