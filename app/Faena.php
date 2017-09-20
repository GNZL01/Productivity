<?php

namespace Productivity;

use Illuminate\Database\Eloquent\Model;

class Faena extends Model
{
    
    protected $table = 'oee_faena';
    protected $primaryKey = 'fae_id';
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
    	'fae_id',
 		'fae_tiempo',
		'fae_nombre',
	 	'fae_activo'
    ];

}
