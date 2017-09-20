<?php

namespace Productivity;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    
    protected $table = 'oee_evento';
    protected $primaryKey = 'eve_id';
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'eve_id',
    	'eve_tiempo',
    	'eve_android', 	
    	'eve_geo_x', 
    	'eve_geo_y', 	
    	'eve_id_jornada', 	
    	'eve_status_jornada', 	
    	'eve_status_operacion', 	
    	'eve_tiempo_operacion', 	
    	'eve_tiempo_detenido', 	
    	'eve_duracion', 	
    	'eve_causa', 	
    	'tra_rut', 	
    	'emp_rut', 	
    	'eve_maquina', 	
    	'eve_fundo', 	
    	'eve_faena'
    ];

}
