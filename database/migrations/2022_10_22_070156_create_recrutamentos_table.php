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
            $table->integer('provincia_id');
            $table->integer('cidade_id');
            $table->string('morada', 255)->nullable();
            $table->integer('academico_id');
            $table->string('documento_curriculum')->nullable();
            $table->string('documento_certificado')->nullable();
            $table->longText('formacao_academica')->nullable();
            $table->longText('experiencia_academica')->nullable();
            $table->longText('cadeiras')->nullable();
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
        Schema::dropIfExists('recrutamentos');
    }
};
