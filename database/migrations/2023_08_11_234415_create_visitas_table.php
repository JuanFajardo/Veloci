<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->string('ip');
            $table->string('url');
            $table->string('titulo');
            $table->string('agente');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('visitas');
    }
}
