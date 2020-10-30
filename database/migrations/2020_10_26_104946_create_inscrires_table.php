<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscriresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscrires', function (Blueprint $table) {
            $table->increments('id');
            
             $table->string('dateinscription');

             $table->integer('eleve_id')->unsigned();
             $table->foreign('eleve_id')->references('id')->on('eleves')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

             $table->integer('classe_id')->unsigned();
             $table->foreign('classe_id')->references('id')->on('classes')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');    

            $table->integer('anneescolaire_id')->unsigned();
             $table->foreign('anneescolaire_id')->references('id')->on('anneescolaires')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');     


             $table->string('user_id');
             $table->foreign('user_id')->references('name')->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('inscrires');
    }
}
