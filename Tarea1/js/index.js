document.addEventListener("DOMContentLoaded", function() {

    //arreglo de 4 objetos con las propiedades: nombre, descripcion, imagen y categoria
const cursos = [
    {
        nombre: "Técnico en programación web",
        descripcion: "Aprende HTML, CSS, JavaScript y frameworks modernos para construir aplicaciones web completas desde cero.",
        imagen: "https://images.unsplash.com/photo-1516116216624-53e697fedbea?w=600&h=400&fit=crop",
        categoria: "Desarrollo Web"
    },
    {
        nombre: "Técnico en Ciencia de datos",
        descripcion: "Explora el mundo de la ciencia de datos con Python, R y herramientas de análisis para descubrir patrones y tomar decisiones informadas.",
        imagen: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop",
        categoria: "Ciencia de Datos"
    },
    {
        nombre: "Técnico en diseño UX/UI",
        descripcion: "Crea experiencias digitales memorables con principios de diseño centrado en el usuario y prototipado interactivo.",
        imagen: "https://img.freepik.com/free-vector/gradient-ui-ux-landing-page_52683-69729.jpg?semt=ais_hybrid&w=740&q=80",
        categoria: "Diseño UX/UI"
    },
    {
        nombre: "Técnico en ciberseguridad",
        descripcion: "Protege sistemas y datos con conocimientos en seguridad informática, análisis de vulnerabilidades y defensa contra amenazas cibernéticas.",
        imagen: "https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600&h=400&fit=crop",
        categoria: "Ciberseguridad"
    }
];

// uso de createElement para crear elementos HTML dinámicamente y appendChild para agregar al DOM
const cursosContainer = document.getElementById("cursos-container");         // busca el div contenedor por id (llamado cursos-container)
cursos.forEach(curso => {          // recorre el arreglo de objetos cursos y por cada curso creara un tipo tarjeta con su información
    const cursoCard = document.createElement("div");   //dentro del div cursos-container se crea un nuevo div de cada curso 
    cursoCard.classList.add("col-md-4"); // se asigna clases css bootstrap para el div de cada curso (mostrada en forma de tarjeta) y que sean responsivas
    //  se crea la estructura HTML de la tarjeta e inserta los datos del curso (se uso el mismo html de tarea 1 para el diseño de la tarjeta con algunas modificaciones pequenas):
    cursoCard.innerHTML = `
        <div class="card h-100">
            <img src="${curso.imagen}" class="card-img-top" alt="${curso.nombre}">
            <div class="card-body">
                <h5 class="card-title">${curso.nombre}</h5>
                <p class="card-text">${curso.descripcion}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">${curso.categoria}</small>
            </div>
            <div>
                 <a href="cursos.html" class="btn btn-custom">Ver más</a>
            </div>
        </div>
    `;
    cursosContainer.appendChild(cursoCard); // se agrega la tarjeta (curso) con html ya estructurado dentro del div llamado cursos-container
});

});
