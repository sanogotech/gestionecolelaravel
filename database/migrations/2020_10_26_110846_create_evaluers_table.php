<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('typeevaluation');
            $table->string('divisionannee');
             $table->string('note');
            $table->string('coefficient');
             $table->string('dateevaluation');
            


            $table->integer('eleve_id')->unsigned();
             $table->foreign('eleve_id')->references('id')->on('eleves')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->integer('enseignant_id')->unsigned();
             $table->foreign('enseignant_id')->references('id')->on('enseignants')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

             $table->integer('classe_id')->unsigned();
             $table->foreign('classe_id')->references('id')->on('classes')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');    

                   $table->integer('matiere_id')->unsigned();
             $table->foreign('matiere_id')->references('id')->on('matieres')
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
        Schema::dropIfExists('evaluers');
    }
}
