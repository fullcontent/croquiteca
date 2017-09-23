<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes',function(Blueprint $table){
            $table->increments('id');
            $table->nullableTimestamps();

            $table->integer('sector_id')->unsigned();
            $table->foreign('sector_id')->references('id')->on('sectors');

            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations');    


            $table->text('conquistadores')->nullable();
            $table->string('anoConquista',255)->nullable();
            $table->string('tipo')->default('Esportiva');
            
            $table->string('nome',100);
            $table->text('descricao');
            $table->string('exposicao', 2);    
            
            $table->string('graduacao',5);
            $table->string('crux',5);
            $table->string('altura',3);
            $table->string('enfiadas',2);
            $table->string('protecao')->nullable();
            $table->string('material')->nullable();
            $table->text('dicas')->nullable();
            $table->string('croqui')->nullable();


            $table->text('fonteDados');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('routes');
    }
}
