<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asortiman', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prostorija');
            $table->integer('kategorija');
            $table->string('naziv');
            $table->string('opis');
            $table->integer('cena');
            $table->string('slika');
            $table->boolean('delete');
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
        Schema::dropIfExists('asortiman');
    }
};
