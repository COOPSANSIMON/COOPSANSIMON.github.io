<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $fillable = [
        //section1
        'opcion',
        //section2
        'seccion2_num_identificacion',
        'seccion2_fecha_expedicion',
        'seccion2_primer_nombre',
        'seccion2_segundo_nombre',
        'seccion2_primer_apellido',
        'seccion2_segundo_apellido',
        //section3
        'seccion3_telefono',
        'seccion3_confirmar_telefono',
        'seccion3_correo',
        'seccion3_confirmar_correo',
        //section4
        'fecha_nacimiento',
        'ciudad_nacimiento',
        'estado_civil',
        'ciudad_residencia',
        'tipo_vivienda',
        'ingresos_mensuales',
        

        // Agregar aquí otros campos según sea necesario
    ];
    
    
}

