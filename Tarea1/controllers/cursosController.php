<?php

require_once __DIR__ . '/../models/cursosModel.php';

class CursosController
{
    private CursosModel $model;

    public function __construct()
    {
        $this->model = new CursosModel();
    }

    // GET ?controller=cursos&action=index
    public function index(): void
    {
        $categoriaSeleccionada = trim($_GET['categoria'] ?? '');

        if ($categoriaSeleccionada !== '') {
            $cursos = $this->model->getByCategoria($categoriaSeleccionada);
        } else {
            $cursos = $this->model->getAll();
        }

        $categorias = $this->model->getCategorias();

        require __DIR__ . '/../views/cursos/index.php';
    }
}