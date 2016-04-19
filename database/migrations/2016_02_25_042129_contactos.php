<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contactos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('contactos', function(Blueprint $table)
    	{
    		$table->increments('id');
    		$table->string('name');
    		$table->string('telephone');
    		$table->string('email');
    		$table->text('message');
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
    	Schema::drop('contactos');
    }

    }
