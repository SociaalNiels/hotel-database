<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamers', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->string('foto');
            $table->string('nummer');
            $table->integer('oppervlakte');
            $table->integer('personen');
            $table->boolean('minibar');
            $table->boolean('bad');
            $table->decimal('prijs');
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
        Schema::dropIfExists('kamers');
    }
}
