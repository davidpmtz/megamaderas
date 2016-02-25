<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Services extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
  		Schema::create('services', function(Blueprint $table)
  		{
  			$table->increments('id');
  			$table->string('nombre');
  			$table->text('descripcion');
  			$table->float('precio');
  			$table->string('lastModify_by');
  			$table->string('timesClicked')->nullable();
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
    public function down() {
  		Schema::drop('services');
  	}
}
