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
        Schema::create('disponiblidades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_professor');
            $table->integer('dias_semana');
            $table->integer('9h_12h');
            $table->integer('14h_17h');
            $table->integer('18h_21h');
            $table->timestamps();
            $table->foreign('fk_professor')->references('id')->on('professors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disponiblidades');
    }
};
