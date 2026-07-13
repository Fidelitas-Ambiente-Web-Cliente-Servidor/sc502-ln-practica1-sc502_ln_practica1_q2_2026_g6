<?php
$basePath = dirname($_SERVER['SCRIPT_NAME']);
if ($basePath === '/' || $basePath === '\\') {
    $basePath = '/';
} else {
    $basePath = rtrim($basePath, '/\\') . '/';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle ?? 'Go Tech - Inicio') ?></title>
  <link href="<?= $basePath ?>css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= $basePath ?>css/<?= htmlspecialchars($pageCSS ?? 'index.css') ?>">
</head>
<body>

  <!-- ========== NAVBAR ========== -->
  <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="<?= $basePath ?>?controller=index&action=index">
        <img src="<?= $basePath ?>images/technology.png" alt="Go Tech">
        Go Tech
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="<?= $basePath ?>?controller=index&action=index">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= $basePath ?>?controller=cursos&action=index">Cursos</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= $basePath ?>?controller=profesores&action=index">Profesores</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= $basePath ?>?controller=contacto&action=create">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>