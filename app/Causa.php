<?php

namespace Productivity;

use Illuminate\Database\Eloquent\Model;

class Causa extends Model
{
    
   	protected $table = 'oee_causa';
   	protected $primaryKey = 'cau_codigo';

   	public $timestamps = false;

	protected $fillable = [
		'cau_codigo',
		'cau_tiempo',
		'cau_nombre',
		'maq_id',
		'cau_activo'
    ];

}
