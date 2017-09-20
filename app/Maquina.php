<?php

namespace Productivity;

use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    
    protected $table = 'oee_maquina';
    protected $primaryKey = 'maq_id';

    public $timestamps = false;

    protected $fillable = [
    	'maq_id',
		'maq_tipo',
		'emp_rut',
		'maq_activo'
    ];

}
