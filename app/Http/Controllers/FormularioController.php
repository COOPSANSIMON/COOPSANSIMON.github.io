<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Respuesta;
use Dompdf\Dompdf;
use Dompdf\Options;

class FormularioController extends Controller
{
   
    public function index()
    {
        return view('formulario');
    }

  
    public function enviar(Request $request)
    {
        // Validación de los campos puede ser agregada aquí si es necesario
        

         // Guardar las respuestas del formulario en la base de datos
         Respuesta::create([
            'opcion' => $request->input('opcion'),
            'seccion2_num_identificacion' => $request->input('section2.num_identificacion'),
            'seccion2_fecha_expedicion' => $request->input('section2.fecha_expedicion'),
            'seccion2_primer_nombre' => $request->input('section2.primer_nombre'),
            'seccion2_segundo_nombre' => $request->input('section2.segundo_nombre'),
            'seccion2_primer_apellido' => $request->input('section2.primer_apellido'),
            'seccion2_segundo_apellido' => $request->input('section2.segundo_apellido'),
            'seccion3_telefono' => $request->input('section3.telefono'),
            'seccion3_confirmar_telefono' => $request->input('section3.confirmar_telefono'),
            'seccion3_correo' => $request->input('section3.correo'),
            'seccion3_confirmar_correo' => $request->input('section3.confirmar_correo'),
            'fecha_nacimiento' => $request['fecha_nacimiento'],
            'ciudad_nacimiento' => $request['ciudad_nacimiento'],
            'estado_civil' => $request['estado_civil'],
            'ciudad_residencia' => $request['ciudad_residencia'],
            'tipo_vivienda' => $request['tipo_vivienda'],
            'ingresos_mensuales' => $request['ingresos_mensuales'],
            // Agregar aquí otros campos según sea necesario
        ]);
          

        // Pasar los datos a la vista de agradecimiento
        $datos = $request->all();
        // Retornar la vista de agradecimiento
        return view('agradecimiento', compact('datos'));
    }

//------------------------------------------------------------------aca se trae los datos y se envia a la vista de agradecimiento -----------------------------------//
    public function agradecimiento(Request $request)
    {
        // Obtener los datos del formulario
        $datos = $request->session()->get('datos');

        // Verificar si los datos están definidos
        if ($datos) {
            // Si existen los datos, renderizar la vista de agradecimiento con los datos
            return view('agradecimiento', compact('datos'));
        } else {
            // Si los datos no están definidos, redirigir al formulario
            return redirect()->route('formulario')->with('error', 'No se encontraron datos del formulario.');
        }
    }


    // aca vamos a permitir que se descargue en pdf
    public function descargarPDF(Request $request)
    {
        // Obtener los datos del formulario
        $datos = $request->all();

        // Renderizar la vista de agradecimiento
        $html = view('agradecimiento', compact('datos'))->render();

        // Configurar Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);

        // Crear una instancia de Dompdf
        $dompdf = new Dompdf($options);

        // Cargar el HTML generado en Dompdf
        $dompdf->loadHtml($html);

        // Renderizar el PDF
        $dompdf->render();

        // Descargar el PDF
        return $dompdf->stream('agradecimiento.pdf');
    }
}
    



