<?php

namespace Productivity;

use Illuminate\Database\Eloquent\Model;

class Fundo extends Model
{
    
    protected $table = 'oee_fundo';    
    protected $primaryKey = 'fun_id';
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
    	'fun_id',
		'fun_tiempo',
		'fun_nombre', 
		'fun_comuna',
		'fun_sector',
		'fun_region',
		'fun_activo'
    ];

}
