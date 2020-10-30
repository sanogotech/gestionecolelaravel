<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::disableForeignKeyConstraints();
        Schema::create('eleves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->string('datenaissance');

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
        Schema::dropIfExists('eleves');
    }
}
