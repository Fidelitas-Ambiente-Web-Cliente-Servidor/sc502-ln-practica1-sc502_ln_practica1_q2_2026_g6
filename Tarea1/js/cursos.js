const cursos = [
    {
        nombre: "HTML y CSS",
        descripcion: "Creación de páginas web modernas y responsivas.",
        categoria: "Desarrollo Web",
        duracion: "8 semanas",
        precio: "$120",
        imagen: "https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600"
    },
    {
        nombre: "JavaScript",
        descripcion: "Programación interactiva para sitios web.",
        categoria: "Desarrollo Web",
        duracion: "10 semanas",
        precio: "$150",
        imagen: "https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=600"
    },
    {
        nombre: "React",
        descripcion: "Desarrollo de interfaces modernas para aplicaciones web.",
        categoria: "Desarrollo Web",
        duracion: "12 semanas",
        precio: "$180",
        imagen: "https://images.unsplash.com/photo-1515879218367-8466d910aaa4?w=600"
    },
    {
        nombre: "Python para Datos",
        descripcion: "Análisis y procesamiento de datos con Python.",
        categoria: "Ciencia de Datos",
        duracion: "8 semanas",
        precio: "$160",
        imagen: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600"
    },
    {
        nombre: "Power BI",
        descripcion: "Creación de reportes y dashboards interactivos.",
        categoria: "Ciencia de Datos",
        duracion: "6 semanas",
        precio: "$130",
        imagen: "https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600"
    },
    {
        nombre: "Machine Learning",
        descripcion: "Introducción a modelos predictivos e inteligencia artificial.",
        categoria: "Ciencia de Datos",
        duracion: "14 semanas",
        precio: "$220",
        imagen: "https://images.unsplash.com/photo-1526379095098-d400fd0bf935?w=600"
    }
];

const contenedorCursos = document.getElementById("contenedorCursos");
const busquedaCurso = document.getElementById("busquedaCurso");
const botonesCategoria = document.querySelectorAll(".filtro-categoria");

let categoriaSeleccionada = "Todos";

function mostrarCursos(listaCursos) 
{

    contenedorCursos.innerHTML = "";

    listaCursos.forEach((curso) => 
    {

        contenedorCursos.innerHTML += `
            <div class="col-md-4 mb-4">
                <div class="card course-card">

                    <img src="${curso.imagen}"
                         class="card-img-top"
                         alt="${curso.nombre}">

                    <div class="card-body">
                        <h5>${curso.nombre}</h5>

                        <p>
                            <strong>Categoría:</strong>
                            ${curso.categoria}
                        </p>

                        <p>${curso.descripcion}</p>

                        <p>
                            <strong>Duración:</strong>
                            ${curso.duracion}
                        </p>

                        <p class="price">
                            ${curso.precio}
                        </p>
                    </div>

                </div>
            </div>
        `;
    });
}

function filtrarCursos() 
{

    const textoBusqueda =
        busquedaCurso.value.toLowerCase();

    const cursosFiltrados = cursos.filter((curso) => 
    {

        const coincideBusqueda =
            curso.nombre.toLowerCase().includes(textoBusqueda) ||
            curso.descripcion.toLowerCase().includes(textoBusqueda);

        const coincideCategoria =
            categoriaSeleccionada === "Todos" ||
            curso.categoria === categoriaSeleccionada;

        return coincideBusqueda && coincideCategoria;
    });

    mostrarCursos(cursosFiltrados);
}

busquedaCurso.addEventListener(
    "input",
    filtrarCursos
);

botonesCategoria.forEach((boton) => 
{

    boton.addEventListener("click", () => 
    {

        categoriaSeleccionada =
            boton.dataset.categoria;

        filtrarCursos();
    });

});

mostrarCursos(cursos);