<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('tipos', function(Blueprint $table)
       {
         $table->increments('id');
         $table->string('tipo');
         $table->string('lastModify_by');
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
       Schema::drop('tipos');
     }

}
