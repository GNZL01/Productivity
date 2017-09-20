<?php

namespace Productivity;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Cargo extends Model
{
    
	protected $table = 'oee_cargo';
	protected $primaryKey = 'car_id';

	public $timestamps = false;

	use Sortable;

	protected $fillable = [
		'car_id',
		'car_tiempo',
		'car_descripcion'
    ];

    public $sortable = [
    	'car_id', 
    	'car_descripcion'
    ];
    
}
