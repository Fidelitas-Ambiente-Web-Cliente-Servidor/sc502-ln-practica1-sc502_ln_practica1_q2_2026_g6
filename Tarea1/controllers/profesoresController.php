<?php

require_once __DIR__ . '/../models/profesoresModel.php';

class ProfesoresController
{
    private ProfesorModel $model;

    public function __construct()
    {
        $this->model = new ProfesorModel();
    }

    // GET ?controller=profesores&action=index
    // Muestra la lista de profesores
    public function index(): void
    {
        $profesores = $this->model->getAll();

        require __DIR__ . '/../views/profesores/profesores.php';
    }

    // GET ?controller=profesores&action=show&id=X
    // Muestra el detalle individual de un profesor
    public function show(int $id): void
    {
        $profesor = $this->model->getById($id);
        if (!$profesor) {
            $error = "El profesor no se encuentra.";
            require __DIR__ . '/../views/profesores/profesores.php';
            return;
        }
        require __DIR__ . '/../views/profesores/detalleProfesor.php';
    }
}