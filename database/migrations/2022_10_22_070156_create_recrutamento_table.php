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
        Schema::create('recrutamentos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',155)->nullable();
            $table->string('nomecompleto',255);
            $table->string('apelido', 150);
            $table->string('email', 255);
            $table->integer('telemovel');
            $table->integer('telemovelalt')->nullable();
            $table->integer('provincia_id')->nullable();
            $table->integer('cidade_id')->nullable();
            $table->string('morada', 255)->nullable();
            $table->integer('academico_id')->nullable();
            $table->integer('documento_id')->nullable();
            $table->integer('verificado')->nullable();
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
        Schema::dropIfExists('recrutamento');
    }
};
