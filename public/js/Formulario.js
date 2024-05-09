//---------------------------------------------------HACE QUE PEUDA DARLE SIGUIENTE Y ME PASE DE SECCITION-------------------------------------------------//
function siguiente(seccionActual, seccionSiguiente) {
    document.getElementById(seccionActual).style.display = 'none';
    document.getElementById(seccionSiguiente).style.display = 'block';
}

// ---------------------------------------------------HACE QUE PUEDA DARLE ANTERIOR Y ME DEVUELVA ---------------------------------------------------//
function anterior(seccionActual, seccionAnterior) {
    document.getElementById(seccionActual).style.display = 'none';
    document.getElementById(seccionAnterior).style.display = 'block';
}




//--------------------------------------------------- ¡IMPORTANTE! ---------------------------------------------------// 
//------------------------------------DE ACA SE HACE EL ENVIO DEL TODO LOS SECTION------------------------------------//
function enviarFormulario() {
    var formulario = document.getElementById('formulario');
    var formData = new FormData(formulario);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', formulario.action);
    xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log('Formulario enviado correctamente');
                console.log(xhr.responseText);
                // Redireccionar al usuario a la página de agradecimiento
                window.location.href = "{{ route('agradecimiento') }}";
            } else {
                console.error('Error al enviar el formulario. Estado:', xhr.status);
            }
        }
    };
    xhr.send(formData);
}


// function enviarFormulario() {
    
//     var formulario = document.getElementById('formulario');
//     var formData = new FormData(formulario);

//     var xhr = new XMLHttpRequest();
//     xhr.open('POST', formulario.action);
//     xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState === XMLHttpRequest.DONE) {
//             if (xhr.status === 200) {
//                 console.log('Formulario enviado correctamente');
//                 console.log(xhr.responseText);
//             } else {
//                 console.error('Error al enviar el formulario. Estado:', xhr.status);
//             }
//         }
//     };
//     xhr.send(formData);
// }






//--------------------------------------------------- aca hacemos que solo puedan insetar campos ---------------------------------------------------// 
// Selecciona el campo de entrada



const input = document.getElementById('num_identificacion');

// Agrega un evento para escuchar los cambios en el campo de entrada
input.addEventListener('input', function() {
    // Elimina todos los caracteres que no sean números
    this.value = this.value.replace(/[^0-9]/g, ' ');
});
//-------------------------------------------//------------------------------//-------------------------//
