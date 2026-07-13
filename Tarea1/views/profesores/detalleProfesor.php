<?php

$pageTitle = 'Detalle del profesor - Go Tech';
$pageCSS   = 'profesores.css';

require __DIR__ . '/../../views/layout/header.php';
?>

<!-- ========== ENCABEZADO DE LA PÁGINA ========== -->
<header class="page-header">
  <div class="container">
    <h1>Detalle del profesor</h1>
    <p>Más información a detalle.</p>
  </div>
</header>

<!-- ========== INFORMACIÓN DEL PROFESOR ========== -->
<section class="container detalle-profesor">

  <div class="profesor profesor-detalle">

    <img
      src="<?= htmlspecialchars($profesor['foto']) ?>" alt="<?= htmlspecialchars($profesor['nombre']) ?>">

    <h2><?= htmlspecialchars($profesor['nombre']) ?></h2>

    <h3><?= htmlspecialchars($profesor['especialidad']) ?></h3>

    <p><?= htmlspecialchars($profesor['bio']) ?></p>

    <a href="?controller=profesores&action=index" class="btn btn-custom" >Volver a profesores</a>
  </div>
</section>

<?php require __DIR__ . '/../../views/layout/footer.php'; ?>