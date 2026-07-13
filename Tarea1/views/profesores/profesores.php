<?php

$pageTitle = 'Profesores - Go Tech';
$pageCSS   = 'profesores.css';

require __DIR__ . '/../../views/layout/header.php';
?>

<!-- Si el profesor no existe, manda error -->
<?php if (!empty($error)): ?>
  <div class="alert alert-danger">
    <?= htmlspecialchars($error) ?>
  </div>
<?php endif; ?>

<!-- ========== ENCABEZADO DE LA PÁGINA ========== -->
<header class="page-header">
  <div class="container">
    <h1>Profesores</h1>
    <p>
      Aquí se muestran varios profesionales dispuestos a apoyar
      el desarrollo académico de nuestros estudiantes.
    </p>
  </div>
</header>

<!-- ========== LISTA DE PROFESORES ========== -->
<section id="profesores" class="container">

  <?php if (empty($profesores)): ?>

    <div class="alert alert-danger text-center mt-4">
      <strong>No hay profesores disponibles.</strong>
    </div>

  <?php else: ?>

    <div class="row" id="listaProfesores">

      <?php foreach ($profesores as $profesor): ?>

        <div class="col-md-6 col-lg-4">

          <div class="profesor">

            <img src="<?= htmlspecialchars($profesor['foto']) ?>" alt="<?= htmlspecialchars($profesor['nombre']) ?>">

            <h2> <?= htmlspecialchars($profesor['nombre']) ?> </h2>

            <h3> <?= htmlspecialchars($profesor['especialidad']) ?></h3>

            <p> <?= htmlspecialchars($profesor['bio']) ?></p>

            <a
              href="?controller=profesores&action=show&id=<?= $profesor['id'] ?>"
              class="btn btn-custom"
            >Ver más</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</section>
<?php require __DIR__ . '/../../views/layout/footer.php'; ?>