@extends('layouts.headerForm')
@section('title', 'Bienvenido | Credisimon')

@section('content')
    <section class="contenedor">
        <div class="container">
            <form action="{{ url('/formulario/enviar') }}" method="POST">
                @csrf
                <div style="margin-top: 50px" id="section1" >    
                    <h1>Sección 1</h1>
                    <section class="opcion">
                        <input type="radio" id="opcion1" name="opcion" value="Libre Inversion" required>
                        <label for="opcion1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                                <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z"/>
                            </svg>
                        </label>
                        <h5>
                            Libre inversión
                        </h5>
                    </section>
                    
                    <section class="opcion">
                        <input type="radio" id="opcion2" name="opcion" value="Cupo Rotativo">
                        <label for="opcion2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                            </svg>                            
                        </label>
                        <h5>
                            Cupo Rotativo
                        </h5>
                    </section>
              
                    <section class="opcion">
                        <input type="radio" id="opcion3" name="opcion" value="Credito Educacion">
                        <label for="opcion3"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-backpack3" viewBox="0 0 16 16">
                                <path d="M4.04 7.43a4 4 0 0 1 7.92 0 .5.5 0 1 1-.99.14 3 3 0 0 0-5.94 0 .5.5 0 1 1-.99-.14M4 9.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm1 .5v3h6v-3h-1v.5a.5.5 0 0 1-1 0V10z"/>
                                <path d="M6 2.341V2a2 2 0 1 1 4 0v.341c.465.165.904.385 1.308.653l.416-1.247a1 1 0 0 1 1.748-.284l.77 1.027a1 1 0 0 1 .15.917l-.803 2.407C13.854 6.49 14 7.229 14 8v5.5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 13.5V8c0-.771.146-1.509.41-2.186l-.802-2.407a1 1 0 0 1 .15-.917l.77-1.027a1 1 0 0 1 1.748.284l.416 1.247A6 6 0 0 1 6 2.34ZM7 2v.083a6 6 0 0 1 2 0V2a1 1 0 1 0-2 0m5.941 2.595l.502-1.505-.77-1.027-.532 1.595q.447.427.8.937M3.86 3.658l-.532-1.595-.77 1.027.502 1.505q.352-.51.8-.937M8 3a5 5 0 0 0-5 5v5.5A1.5 1.5 0 0 0 4.5 15h7a1.5 1.5 0 0 0 1.5-1.5V8a5 5 0 0 0-5-5"/>
                            </svg>
                        </label>
                        <h5>
                           Crédito Educativo
                        </h5>
                    </section>
                    <div class="d-flex justify-content-end " style="margin-top: 150px;">
                        <button class="btn btn-secondary" type="button" onclick="siguiente('section1', 'section2')">Siguiente</button>
                    </div>
                </div>
        
                <div id="section2" style="display: none;">
                    <h1>Sección 2</h1>
                    <label for="num_identificacion" >Número de Identificación:</label>
                    <input style="margin-bottom: 10px;" type="text" name="section2[num_identificacion]" id="num_identificacion" maxlength="10" required>
                    <br>
                    <label for="fecha_expedicion">Fecha de Expedición:</label>
                    <input style="margin-bottom: 10px;" type="date" name="section2[fecha_expedicion]" id="fecha_expedicion" required>
                    <br>
                    <label for="primer_nombre">Primer Nombre:</label>
                    <input style="margin-bottom: 10px;" type="text" name="section2[primer_nombre]" id="primer_nombre" required>
                    <br>
                    <label for="segundo_nombre">Segundo Nombre:</label>
                    <input style="margin-bottom: 10px;" type="text" name="section2[segundo_nombre]" id="segundo_nombre">
                    <br>
                    <label for="primer_apellido">Primer Apellido:</label>
                    <input style="margin-bottom: 10px;" type="text" name="section2[primer_apellido]" id="primer_apellido" required>
                    <br>
                    <label for="segundo_apellido">Segundo Apellido:</label>
                    <input type="text" name="section2[segundo_apellido]" id="segundo_apellido">
                    <br>
                    <br>

                    <div class="d-flex justify-content-center " style="margin-top: ">
                        <button class="btn btn-secondary" type="button" onclick="anterior('section2', 'section1')">Anterior</button>
                    </div>
                    
                    <div class="d-flex justify-content-end " style="margin-top: ;">
                        <button class="btn btn-secondary" type="button" onclick="siguiente('section2', 'section3')">Siguiente</button>
                    </div>
                </div>
        
                <div id="section3" style="display: none;">
                    <h1>Sección 3</h1>
                    <label for="telefono">Teléfono:</label>
                    <input type="text" name="section3[telefono]" id="telefono" required>
                    <br>
                    <br>
                    <label for="confirmar_telefono">Confirmar Teléfono:</label>
                    <input type="text" name="section3[confirmar_telefono]" id="confirmar_telefono" required>
                    <br>
                    <br>
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" name="section3[correo]" id="correo" required >
                    <br>
                    <br>
                    <label for="confirmar_correo">Confirmar Correo Electrónico:</label>
                    <input type="email" name="section3[confirmar_correo]" id="confirmar_correo" required>
                    <!-- Aquí puedes añadir más campos según sea necesario -->
                    <br>
                    <br>
                    <div class="d-flex justify-content-center " style="margin-top: ;">
                        <button class="btn btn-secondary" type="button" onclick="anterior('section3', 'section2')">Anterior</button>
                    </div>
                    <div class="d-flex justify-content-end " style="margin-top: ;">
                        <button class="btn btn-secondary" type="button" onclick="siguiente('section3', 'section4')">Siguiente</button>
                    </div>                                       
                </div>
                
                <div id="section4" style="display: none;">
                    <h2>Sección 4. Información adicional</h2>
                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
                    </div>
                    <div class="form-group">
                        <label for="ciudad_nacimiento">Ciudad de nacimiento:</label>
                        <input type="text" class="form-control" id="ciudad_nacimiento" name="ciudad_nacimiento">
                    </div>
                    <div class="form-group">
                        <label for="estado_civil">Estado civil:</label>
                        <select class="form-control" id="estado_civil" name="estado_civil">
                            <option value="soltero">Soltero/a</option>
                            <option value="casado">Casado/a</option>
                            <option value="divorciado">Divorciado/a</option>
                            <option value="viudo">Viudo/a</option>
                            <option value="conviviente">Conviviente</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ciudad_residencia">Ciudad de residencia:</label>                                            
                        <input type="text" class="form-control" id="ciudad_residencia" name="ciudad_residencia">
                    </div>
                    <div class="form-group">
                        <label for="tipo_vivienda">Tipo de vivienda:</label>
                        <select class="form-control" id="tipo_vivienda" name="tipo_vivienda">
                            <option value="propia">Propia</option>
                            <option value="arrendada">Arrendada</option>
                            <option value="familiar">Familiar</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ingresos_mensuales">¿Cuánto sumas tus ingresos mensuales?</label>
                        <input type="number" class="form-control" id="ingresos_mensuales" name="ingresos_mensuales" placeholder="Ingrese una cantidad en MXN">
                    </div>
                    
                    <div class="d-flex justify-content-center " style="margin-top: ;">
                        <button class="btn btn-secondary" type="button" onclick="anterior('section4', 'section3')">Anterior</button>
                    </div>
                    <div class="d-flex justify-content-end " style="margin-top: ">
                        <button class="btn btn-secondary" type="submit" onclick="enviarFormulario()">Enviar</button>
                    </div>  
                </div>

            </form>
        
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

           
@endsection
