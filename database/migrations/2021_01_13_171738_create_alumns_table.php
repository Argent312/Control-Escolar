<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumns', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidoP');
            $table->string('apellidoM');
            $table->string('curp');
            $table->string('telefono');
            $table->integer('edad');
            $table->string('sexo');
            $table->char('sangre', 2);
            $table->date('fechaNacimiento');
            $table->string('lugarNacimiento');
            $table->string('nacionalidad');
            $table->char('grado', 1);
            $table->char('grupo', 1);
            $table->string('turno');
            $table->string('estado')->default('Activo');
            $table->string('direccion');
            $table->string('colonia');
            $table->string('cp');
            $table->string('entidad');
            $table->string('ciudad');
            $table->foreignId('tutor_id');

            $table->foreign('tutor_id')->references('id')->on('tutors');
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
        Schema::dropIfExists('alumns');
    }
}
