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

            $table->integer('sector_id')->unsigned();
            $table->foreign('sector_id')->references('id')->on('sectors');
<<<<<<< HEAD

            $table->integer('location_id')->unsigned()->default(1);
            $table->foreign('location_id')->references('id')->on('locations');

            $table->text('conquistadores')->nullable();
            $table->string('anoConquista')->nullable();
            $table->string('tipo')->default('Esportiva');
=======

            $table->text('conquistadores')->nullable();
            $table->integer('anoConquista')->nullable();
            $table->enum('tipo', ['Esportiva','Boulder','Tradicional']);
            
>>>>>>> v1.1
            $table->string('nome',100);
            $table->text('descricao');
            $table->enum('exposicao', ['E1', 'E2', 'E3' , 'E4', 'E5', 'E6','E7','E8']);    
            
<<<<<<< HEAD
            $table->string('exposicao',2)->nullable();
            $table->string('graduacao',5)->nullable();
=======
            $table->string('graduacao',5);
>>>>>>> v1.1
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
