<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ventas', function(Blueprint $table)
		{
			$table->increments('idVen');
			$table->string('cusven');
			$table->timestamp('fecProcVen');
			$table->string('provieneVen');
			$table->string('regionVen');
			$table->string('latVen');
			$table->string('lngVen');
			$table->timestamp('fecEmbVen');
			$table->string('tarjVen');
			$table->string('zonaVen');
			$table->string('embVen');
			$table->string('coordFlotVen');
			$table->string('puertoVen');
			$table->string('prodVen');
			$table->string('almVen');
			$table->string('estVen');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ventas');
	}

}
