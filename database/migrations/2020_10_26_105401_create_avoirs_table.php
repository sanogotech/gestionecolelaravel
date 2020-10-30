<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvoirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avoirs', function (Blueprint $table) {
            $table->increments('id');

            
             $table->integer('classe_id')->unsigned();
             $table->foreign('classe_id')->references('id')->on('classes')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');    

            $table->integer('matiere_id')->unsigned();
             $table->foreign('matiere_id')->references('id')->on('matieres')
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
        Schema::dropIfExists('avoirs');
    }
}
