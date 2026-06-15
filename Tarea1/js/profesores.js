// Arreglo para almacenar a información de los profesores
let profesores = [
    {
        nombre: "Leonardo Moscoa",
        especialidad: "Desarrollo Web",
        descripcion: "Dedicado en desarrollar sitios web utilizando HTML, CSS y JavaScript.",
        foto: "./images/profesor1.jpg",
        correo: "leonardo@gotech.com",
        cursos: "HTML y CSS, JavaScript"
    },
    {
        nombre: "Eliécer Mendoza",
        especialidad: "Desarrollo de Interfaz",
        descripcion: "Dedicado en la creación de interfaces web y aplicaciones por medio de React.",
        foto: "./images/profesor2.jpg",
        correo: "eliecer@gotech.com",
        cursos: "React, Desarrollo Web"
    },
    {
        nombre: "Sebastian Solano",
        especialidad: "Ciencia de Datos",
        descripcion: "Dedicado al análisis de datos, modelos predictivos y uso de Python.",
        foto: "./images/profesor3.jpg",
        correo: "sebastian@gotech.com",
        cursos: "Python para Datos, Machine Learning"
    },
    {
        nombre: "Mauricio Moreira",
        especialidad: "Análisis de Datos",
        descripcion: "Dedicado en la creación de reportes y dashboard con Power BI.",
        foto: "./images/profesor4.jpg",
        correo: "mauricio@gotech.com",
        cursos: "Power BI, Ciencia de Datos"
    }
];

// Evento que se va a ejectuar al cargar la sección de profesores en la página
document.addEventListener("DOMContentLoaded", function () {

    //Indica el contenedor donde muestra la información de los profesores
    let listaProfesores = document.getElementById("listaProfesores");

    // Recorre el arreglo con la información de cada profesor
    for (let i = 0; i < profesores.length; i++) {

        // Crea una columna con elementos de bootsrap
        let columna = document.createElement("div");
        columna.className = "col-md-6 col-lg-4";

        // Crea la tarjeta según el profesor seleccionado
        let tarjeta = document.createElement("div");
        tarjeta.className = "profesor";
        tarjeta.dataset.profesor = i;

        // Agrega el contenido de la tarjeta en HTML
        tarjeta.innerHTML = `
            <img src="${profesores[i].foto}" alt="${profesores[i].nombre}">
            <h2>${profesores[i].nombre}</h2>
            <h3>${profesores[i].especialidad}</h3>
            <p>${profesores[i].descripcion}</p>
        `;

        // Evento para abrir el modal al tocar una tarjeta
        tarjeta.addEventListener("click", function () {
            let idProfesor = tarjeta.dataset.profesor;
            abrirModal(idProfesor);
        });

        // Agrega la tarjeta en la columna
        columna.appendChild(tarjeta);

        // Agrega la columna al contenedor
        listaProfesores.appendChild(columna);
    }

    // Asigna elementos para cerrar el modal
    let btncerrarModal = document.getElementById("btncerrarModal");
    let modalProfesor = document.getElementById("modalProfesor");

    // Evento para cerrar el modal orpimiendo la X 
    btncerrarModal.addEventListener("click", function () {
        modalProfesor.style.display = "none";
    });

    // Evento para cerrar el modal al oprimir fuera del contenido
    modalProfesor.addEventListener("click", function (event) {
        if (event.target == modalProfesor) {
            modalProfesor.style.display = "none";
        }
    });
});

// Función para obtener el id del profesor seleccionado, cargando y mostrando la información en el modal. 
function abrirModal(idProfesor) {
    let profesor = profesores[idProfesor];

    document.getElementById("modalFoto").src = profesor.foto;
    document.getElementById("modalNombre").innerText = profesor.nombre;
    document.getElementById("modalEspecialidad").innerText = profesor.especialidad;
    document.getElementById("modalDescripcion").innerText = profesor.descripcion;
    document.getElementById("modalCorreo").innerText = "Correo: " + profesor.correo;
    document.getElementById("modalCursos").innerText = "Cursos que ofrece: " + profesor.cursos;

    document.getElementById("modalProfesor").style.display = "block";
}