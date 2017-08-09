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
            $table->timestamps();

            $table->integer('sector_id');
            //$table->foreign('sector_id')->references('id')->on('sectors');

            $table->text('conquistadores')->nullable();
            $table->integer('anoConquista')->nullable();
            $table->integer('tipo');
            $table->string('nome',100);
            $table->text('descricao');
            
            $table->string('exposicao',2)->nullable();
            $table->string('graduacao',5);
            $table->string('crux',5);
            $table->string('altura',3);
            $table->string('enfiadas',2);
            $table->string('protecao');
            $table->string('material');
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
