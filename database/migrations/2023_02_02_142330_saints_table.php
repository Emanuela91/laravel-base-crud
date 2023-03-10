<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // creo la tabella 
        Schema::create('saints', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 32);
            $table->string('luogo_nascita');
            $table->date('data_benedizione');
            $table->integer('numero_miracoli')->unsigned();
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
        Schema::dropIfExists('saints');
    }
};