<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration
{
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            //section1
            $table->id();
            $table->string('opcion'); // Agrega esta línea para la nueva opción
            //section2
            $table->string('seccion2_num_identificacion')->nullable();
            $table->date('seccion2_fecha_expedicion')->nullable();
            $table->string('seccion2_primer_nombre')->nullable();
            $table->string('seccion2_segundo_nombre')->nullable();
            $table->string('seccion2_primer_apellido')->nullable();
            $table->string('seccion2_segundo_apellido')->nullable();
            //section3
            $table->string('seccion3_telefono')->nullable();
            $table->string('seccion3_confirmar_telefono')->nullable();
            $table->string('seccion3_correo')->nullable();
            $table->string('seccion3_confirmar_correo')->nullable();
            //section4
            $table->date('fecha_nacimiento')->nullable();
            $table->string('ciudad_nacimiento')->nullable();
            $table->enum('estado_civil', ['soltero', 'casado', 'divorciado', 'viudo', 'conviviente'])->nullable();
            $table->string('ciudad_residencia')->nullable();
            $table->enum('tipo_vivienda', ['propia', 'arrendada', 'familiar', 'otro'])->nullable();
            $table->decimal('ingresos_mensuales', 10, 2)->nullable();
            // Agregar aquí otros campos según sea necesario
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
