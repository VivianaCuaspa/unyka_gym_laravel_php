<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscripciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('socio_id');
            $table->unsignedBigInteger('tipo_suscripcion_id');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('estado');
            $table->foreign("tipo_suscripcion_id")->references("id")->on("tipo_suscripciones")
            ->onDelete("cascade")
            ->onUpdate("cascade");
            $table->foreign("socio_id")->references("id")->on("socios")->onDelete("cascade")
            ->onUpdate("cascade");
            $table->softDeletes();
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
        Schema::dropIfExists('suscripciones');
    }
}
