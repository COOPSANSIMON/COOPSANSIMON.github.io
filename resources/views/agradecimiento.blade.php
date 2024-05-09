<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradecimiento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, p {
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        ul li span {
            font-weight: bold;
        }
    </style>
</head>
{{-- en el FormularioController esta la configuracion para traer los dotos y mostrar esta vista --}}
<body>
    <div class="container">
        <h1>¡Gracias por completar el formulario!</h1>
        <p>A continuación, te presentamos los detalles de tu solicitud:</p>
        <ul>
            <li><span>Solicitud:</span>{{ $datos['opcion'] }}</li>
            <li><span>Nombre:</span> {{ $datos['section2']['primer_nombre'] }} {{ $datos['section2']['segundo_nombre'] }}</li>
            <li><span>Apellido:</span> {{ $datos['section2']['primer_apellido'] }} {{ $datos['section2']['segundo_apellido'] }}</li>
            <li><span>Fecha de nacimiento:</span> {{ $datos['fecha_nacimiento'] }}</li>
            <li><span>Ciudad de nacimiento:</span> {{ $datos['ciudad_nacimiento'] }}</li>
            <li><span>Estado civil:</span> {{ $datos['estado_civil'] }}</li>
            <li><span>Ciudad de residencia:</span> {{ $datos['ciudad_residencia'] }}</li>
            <li><span>Tipo de vivienda:</span> {{ $datos['tipo_vivienda'] }}</li>
            <li><span>Ingresos mensuales:</span> ${{ $datos['ingresos_mensuales'] }}</li>
            <!-- Agrega aquí otros campos según sea necesario -->
        </ul>

    </div>
    <a  type="button" href="{{ route('descargar.pdf', $datos) }}">Descargar PDF</a>
</body>

</html>