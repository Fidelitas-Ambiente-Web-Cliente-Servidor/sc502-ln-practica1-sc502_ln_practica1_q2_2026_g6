document.addEventListener("DOMContentLoaded", function () {

    //1. Seleccionar campos del formulario

    const inputNombre = document.getElementById("nombre");
    const inputCorreo = document.getElementById("correo");
    const inputTelefono = document.getElementById("telefono");
    const inputAsunto = document.getElementById("asunto");
    const inputMensaje = document.getElementById("mensaje");
    const formulario = document.getElementById("contactForm");
    const btnEnviar = document.getElementById("btnEnviar");

    //2. Seleccionar contenedor de errores

    const errorNombre = document.getElementById("errorNombre");
    const errorCorreo = document.getElementById("errorCorreo");
    const errorTelefono = document.getElementById("errorTelefono");
    const errorAsunto = document.getElementById("errorAsunto");
    const errorMensaje = document.getElementById("errorMensaje");

    //3. Validación Nombre Completo

    function validarNombre() {
        const nombreValor = inputNombre.value.trim(); // Eliminar espacios al inicio y final
        const regexNombre = /^[a-zA-Z\s]+$/;

        if (nombreValor.length < 5) {
            errorNombre.innerText = "El nombre debe tener al menos 5 caracteres.";
            inputNombre.style.borderColor = "red";
            return false;
        } else if (!regexNombre.test(nombreValor)) {
            errorNombre.innerText = "El nombre solo puede contener letras y espacios.";
            inputNombre.style.borderColor = "red";
            return false;
        } else {
            errorNombre.innerText = ""; // Limpiar error
            inputNombre.style.borderColor = "green"; // Borde verde si es correcto
            return true;
        }
    }

    //4. Validación Correo Electrónico

    function validarCorreo() {
        const correoValor = inputCorreo.value.trim();
        const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

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
        const telefonoValor = inputTelefono.value.trim();
        const regexTelefono = /^[0-9]+$/;

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
        const asuntoValor = inputAsunto.value.trim();

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
        const mensajeValor = inputMensaje.value.trim(); 

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
        validarFormulario(); // Verificar si se habilita el botón
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
        const nombreValido = inputNombre.value.trim().length >= 5 && /^[a-zA-Z\s]+$/.test(inputNombre.value.trim());
        const correoValido = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(inputCorreo.value.trim());
        const telefonoValido = /^[0-9]+$/.test(inputTelefono.value.trim()) && inputTelefono.value.trim().length >= 8;
        const asuntoValido = inputAsunto.value.trim().length >= 3; // Validar asunto sin función para evitar múltiples llamadas
        const mensajeValido = inputMensaje.value.trim().length >= 20; // Validar mensaje sin función para evitar múltiples llamadas

        if (nombreValido && correoValido && telefonoValido && asuntoValido && mensajeValido) {
            btnEnviar.disabled = false; // Si todo está bien se habilita el botón
        } else {
            btnEnviar.disabled = true; // Si hay algún error se deshabilita el botón
        }
    }

    //10. Envío del formulario

    formulario.addEventListener("submit", function (event) {
        event.preventDefault();  // Para que no se recargue la página

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

        //Limpiar el formulario

        formulario.reset();
        btnEnviar.disabled = true;

        //Restablecer colores de borde

        inputNombre.style.borderColor = "";
        inputCorreo.style.borderColor = "";
        inputTelefono.style.borderColor = "";
        inputAsunto.style.borderColor = "";
        inputMensaje.style.borderColor = "";


        //Desaparecer el mensaje después de 5 segundos

        setTimeout(function () {
            mensajeExito.innerText = "";
        }, 5000);


    });

        

});
