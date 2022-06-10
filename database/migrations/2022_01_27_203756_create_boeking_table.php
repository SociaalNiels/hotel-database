<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoekingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boeking', function (Blueprint $table) {
            $table->id();
            $table->date('datumboeking');
            $table->string('naam');
            $table->string('adres');
            $table->string('creditkaartnummer');
            $table->date('aankomstdatum');
            $table->date('vertrekdatum');
            $table->string('kamernummer');
            $table->integer('kamer_id');
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
        Schema::dropIfExists('boeking');
    }
}
