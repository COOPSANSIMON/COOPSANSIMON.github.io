<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeleccionMotivoController;
use App\Http\Controllers\InformacionPersonalController;
use App\Http\Controllers\SegundoPasoController;
use App\Http\Controllers\TercerPasoController;


// aca vamos a usar el form
use App\Http\Controllers\FormularioController;

// para el envio del correo 
use App\Http\Controllers\MailController;


// aca va a aparecer la primer vista cuando se abra la pagina


Route::get('/', function () {
    // return view('seleccion_motivo');
    return view('formulario');
});

Route::get('/formulario', [FormularioController::class, 'index'])->name('formulario');
Route::post('/formulario/enviar', [FormularioController::class, 'enviar']);
Route::get('/agradecimiento', [FormularioController::class, 'agradecimiento'])->name('agradecimiento');
Route::get('/descargar-pdf', [FormularioController::class, 'descargarPDF'])->name('descargar.pdf');

