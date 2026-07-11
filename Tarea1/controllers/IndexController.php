<?php

require_once __DIR__ . '/../models/IndexModel.php';

class IndexController
{
    private IndexModel $model;

    public function __construct()
    {
        $this->model = new IndexModel();
    }

    // GET ?action=index
    // Muestra la vista principal con los cursos
    public function index(): void
    {
        $cursos = $this->model->getAllCursos();
        //imprimir el array de cursos para depuración
        //echo '<pre>'; print_r($cursos); echo '</pre>';
        //die(); // Detener la ejecución para ver el resultado en el navegador
        require __DIR__ . '/../views/index/index.php';
    }
}