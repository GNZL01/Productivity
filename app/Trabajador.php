<?php

namespace Productivity;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    
    protected $table = 'oee_trabajador';
	protected $primaryKey = 'tra_id';

    public $timestamps = false;

	protected $fillable = [
		'tra_id',
		'tra_tiempo',
		'emp_rut',
		'tra_rut',
		'tra_dv',
		'tra_nombres',
		'tra_apellidos',
		'tra_fecha_nacimiento',
		'tra_vencimiento_corma',
		'tra_vencimiento_examen',
		'tra_licencia_conducir',
		'tra_vencimiento_licencia_conducir',
		'car_id',
		'tra_email',
		'tra_activo'
    ];

}
