<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('sectors',function(Blueprint $table){
            $table->increments('id');
            $table->timestamps();
     
           $table->string('nome',100);
           $table->text('descricao');
           $table->text('endereco');

           $table->string('latitude')->nullable();
           $table->string('longitude')->nullable();

           $table->text('comoChegar')->nullable();

           $table->integer('location_id')->unsigned();
           $table->foreign('location_id')->references('id')->on('locations');

           $table->string('imagem')->nullable();
;           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sectors');
    }
}
