<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations',function(Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->string('nome',100);
            $table->string('tipoRocha');
            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cities');



           $table->string('endereco')->nullable(); 
           $table->text('descricao');
           $table->string('latitude')->nullable();
           $table->string('longitude')->nullable();
           $table->string('imagem')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('locations');
    }
}
