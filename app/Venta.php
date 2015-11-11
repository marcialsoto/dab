<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model {

	//Se permite el insertado de llas siguientes columnas
	protected $fillable = [
		'cusven',
		'fecProcVen',
		'provieneVen',
		'regionVen',
		'latVen',
		'lngVen',
		'fecEmbVen',
		'tarjVen',
		'zonaVen',
		'embVen',
		'coordFlotVen',
		'puertoVen',
		'prodVen',
		'almVen',
		'estVen'
	];

}
