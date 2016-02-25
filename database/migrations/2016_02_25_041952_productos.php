<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('productos', function(Blueprint $table)
    	{
    		$table->increments('id');
    		$table->string('nombre');
    		$table->text('descripcion');
    		$table->float('precio');
    		$table->integer('tipo_id')->unsigned();
    		$table->foreign('tipo_id')->references('id')->on('tipos');
    		$table->string('lastModify_by');
    		$table->string('timesClicked')->nullable;
    		$table->integer('cantidad');
    		$table->char('view');
    		$table->timestamps();
    		$table->softDeletes();
    	});
    }

  	/**
  	 * Reverse the migrations.
  	 *
  	 * @return void
  	 */
  	public function down()
  	{
  		Schema::drop('productos');
  	}

  }
