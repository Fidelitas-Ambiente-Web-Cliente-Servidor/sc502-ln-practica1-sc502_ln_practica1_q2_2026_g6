<?php

require_once __DIR__ . '/../models/ContactoModel.php';

class ContactoController
{
    private ContactoModel $model;

    public function __construct()
    {
        $this->model = new ContactoModel();
    }

    // GET ?controller=contacto&action=create
    // Muestra la vista de contacto
    public function create(): void
    {
        $exito = $_GET['exito'] ?? null; // Obtener el valor de 'exito' de la URL si está presente
        require __DIR__ . '/../views/contacto/contacto.php';
    }

    //POST ?controller=contacto&action=store
    // Procesa el formulario de contacto y guarda los datos en la base de datos
    public function store(): void
    {
        // Leer datos del POST
        $nombre = trim($_POST['nombre'] ?? '');
        $correo = trim($_POST['correo'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');
        $asunto = trim($_POST['asunto'] ?? '');
        $mensaje = trim($_POST['mensaje'] ?? '');


        // Validación básica del lado servidor
        if (!$nombre || !$correo || !$telefono || !$asunto || !$mensaje) 
            {
            $error = 'Todos los campos son obligatorios.';
            require __DIR__ . '/../views/contacto/contacto.php';
            return;
        }

        // Llamar al modelo para guardar los datos en la base de datos
        $this->model->create($nombre, $correo, $telefono, $asunto, $mensaje);

        // Redirigir a la vista de contacto con un mensaje de éxito
        header('Location: ?controller=contacto&action=create&exito=1');
        exit();
    }

}