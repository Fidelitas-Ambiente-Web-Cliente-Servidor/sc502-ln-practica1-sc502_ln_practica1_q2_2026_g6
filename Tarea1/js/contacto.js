document.addEventListener("DOMContentLoaded", function () {

    //1. Seleccionar campos del formulario

    let inputNombre   = document.getElementById("nombre");
    let inputCorreo   = document.getElementById("correo");
    let inputTelefono = document.getElementById("telefono");
    let inputAsunto   = document.getElementById("asunto");
    let inputMensaje  = document.getElementById("mensaje");
    let formulario    = document.getElementById("contactForm");
    let btnEnviar     = document.getElementById("btnEnviar");

    //2. Seleccionar contenedor de errores

    let errorNombre   = document.getElementById("errorNombre");
    let errorCorreo   = document.getElementById("errorCorreo");
    let errorTelefono = document.getElementById("errorTelefono");
    let errorAsunto   = document.getElementById("errorAsunto");
    let errorMensaje  = document.getElementById("errorMensaje");

    //3. Validación Nombre Completo

    function validarNombre() {
        let nombreValor = inputNombre.value.trim();
        let regexNombre = /^[a-zA-Z\s]+$/;

        if (nombreValor.length < 5) {
            errorNombre.innerText = "El nombre debe tener al menos 5 caracteres.";
            inputNombre.style.borderColor = "red";
            return false;
        } else if (!regexNombre.test(nombreValor)) {
            errorNombre.innerText = "El nombre solo puede contener letras y espacios.";
            inputNombre.style.borderColor = "red";
            return false;
        } else {
            errorNombre.innerText = "";
            inputNombre.style.borderColor = "green";
            return true;
        }
    }

    //4. Validación Correo Electrónico

    function validarCorreo() {
        let correoValor = inputCorreo.value.trim();
        let regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!regexCorreo.test(correoValor)) {
            errorCorreo.innerText = "El correo no es válido.";
            inputCorreo.style.borderColor = "red";
            return false;
        } else {
            errorCorreo.innerText = "";
            inputCorreo.style.borderColor = "green";
            return true;
        }
    }

    //5. Validación Teléfono

    function validarTelefono() {
        let telefonoValor = inputTelefono.value.trim();
        let regexTelefono = /^[0-9]+$/;

        if (!regexTelefono.test(telefonoValor)) {
            errorTelefono.innerText = "El teléfono solo puede contener números.";
            inputTelefono.style.borderColor = "red";
            return false;
        } else if (telefonoValor.length < 8) {
            errorTelefono.innerText = "El teléfono debe tener al menos 8 dígitos.";
            inputTelefono.style.borderColor = "red";
            return false;
        } else {
            errorTelefono.innerText = "";
            inputTelefono.style.borderColor = "green";
            return true;
        }
    }

    //6. Validación Asunto

    function validarAsunto() {
        let asuntoValor = inputAsunto.value.trim();

        if (asuntoValor.length < 3) {
            errorAsunto.innerText = "El asunto debe tener al menos 3 caracteres.";
            inputAsunto.style.borderColor = "red";
            return false;
        } else {
            errorAsunto.innerText = "";
            inputAsunto.style.borderColor = "green";
            return true;
        }
    }

    //7. Validación Mensaje

    function validarMensaje() {
        let mensajeValor = inputMensaje.value.trim();

        if (mensajeValor.length < 20) {
            errorMensaje.innerText = "El mensaje debe tener al menos 20 caracteres.";
            inputMensaje.style.borderColor = "red";
            return false;
        } else {
            errorMensaje.innerText = "";
            inputMensaje.style.borderColor = "green";
            return true;
        }
    }

    //8. Validación de cambios en tiempo real

    inputNombre.addEventListener("input", function () {
        validarNombre();
        validarFormulario();
    });

    inputCorreo.addEventListener("input", function () {
        validarCorreo();
        validarFormulario();
    });

    inputTelefono.addEventListener("input", function () {
        validarTelefono();
        validarFormulario();
    });

    inputAsunto.addEventListener("input", function () {
        validarAsunto();
        validarFormulario();
    });

    inputMensaje.addEventListener("input", function () {
        validarMensaje();
        validarFormulario();
    });

    //9. Habilitar botón de envío

    function validarFormulario() {
        let nombreValido   = inputNombre.value.trim().length >= 5 && /^[a-zA-Z\s]+$/.test(inputNombre.value.trim());
        let correoValido   = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(inputCorreo.value.trim());
        let telefonoValido = /^[0-9]+$/.test(inputTelefono.value.trim()) && inputTelefono.value.trim().length >= 8;
        let asuntoValido   = inputAsunto.value.trim().length >= 3;
        let mensajeValido  = inputMensaje.value.trim().length >= 20;

        if (nombreValido && correoValido && telefonoValido && asuntoValido && mensajeValido) {
            btnEnviar.disabled = false;
        } else {
            btnEnviar.disabled = true;
        }
    }

    /* --- COMENTADO EN TAREA 2: el envío ahora lo maneja PHP via POST ---

    //10. Envío del formulario

    formulario.addEventListener("submit", function (event) {
        event.preventDefault();

        let mensajeExito = document.getElementById("mensajeExito");
        if (!mensajeExito) {
            mensajeExito = document.createElement("div");
            mensajeExito.id = "mensajeExito";
            mensajeExito.style.color = "green";
            mensajeExito.style.fontWeight = "bold";
            mensajeExito.style.marginTop = "20px";
            mensajeExito.style.textAlign = "center";
            mensajeExito.innerText = "Formulario enviado con éxito. Le contactaremos pronto.";
            formulario.appendChild(mensajeExito);
        }

        formulario.reset();
        btnEnviar.disabled = true;

        inputNombre.style.borderColor = "";
        inputCorreo.style.borderColor = "";
        inputTelefono.style.borderColor = "";
        inputAsunto.style.borderColor = "";
        inputMensaje.style.borderColor = "";

        setTimeout(function () {
            mensajeExito.innerText = "";
        }, 5000);
    });

    --- FIN COMENTARIO TAREA 2 --- */

});
