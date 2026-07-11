<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Go Tech - Inicio</title>
  <link href="/sc502-ln-practica1-sc502_ln_practica1_q2_2026_g6/Tarea1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/sc502-ln-practica1-sc502_ln_practica1_q2_2026_g6/Tarea1/css/<?= $pageCSS ?? 'index.css' ?>">
</head>
<body>

  <!-- ========== NAVBAR ========== -->
  <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/sc502-ln-practica1-sc502_ln_practica1_q2_2026_g6/Tarea1/">
        <img src="/sc502-ln-practica1-sc502_ln_practica1_q2_2026_g6/Tarea1/images/technology.png" alt="Go Tech">
        Go Tech
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="/sc502-ln-practica1-sc502_ln_practica1_q2_2026_g6/Tarea1/">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="/sc502-ln-practica1-sc502_ln_practica1_q2_2026_g6/Tarea1/?controller=cursos&action=index">Cursos</a></li>
          <li class="nav-item"><a class="nav-link" href="/sc502-ln-practica1-sc502_ln_practica1_q2_2026_g6/Tarea1/?controller=profesores&action=index">Profesores</a></li>
          <li class="nav-item"><a class="nav-link" href="/sc502-ln-practica1-sc502_ln_practica1_q2_2026_g6/Tarea1/?controller=contacto&action=create">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>