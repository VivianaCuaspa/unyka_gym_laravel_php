<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasInformativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas_informativas', function (Blueprint $table) {
            $table->id();
            $table->integer('nivel_actividad');
            $table->integer('frecuencia_alimentacion');
            $table->string('intolerancias');
            $table->string('alergias');
            $table->string('preparacion_comidas');
            $table->string('patologia');
            $table->string('patología_familiar');
            $table->string('medicacion');
            $table->unsignedBigInteger('socio_id');
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
        Schema::dropIfExists('fichas_informativas');
    }
}
