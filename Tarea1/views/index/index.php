<?php

$pageTitle = 'Inicio - Academia Go Tech';
$depth = 0;
require __DIR__ . '/../layout/header.php';
?>

<!-- ========== HERO ========== -->
  <header id="hero">
    <div class="container">
      <h1>Go Tech</h1>
      <p>Transformando mentes, construyendo el futuro con educación de excelencia para todos.</p>
      <a href="cursos.html" class="btn">Comienza hoy</a>
    </div>
  </header>

  <!-- Cursos cargados consultando la base de datos -->
   <section class="section-cursos">
      <h2>Cursos Destacados</h2>
      <?php if (empty($cursos)): ?>
      <div class="alert alert-danger text-center mt-4">
        <strong>No hay cursos disponibles.</strong>
      </div>
      <?php else: ?>
        <div class="row g-4" id="cursos-container">
          <?php foreach ($cursos as $curso): ?>
            <div class="col-md-4">
              <div class="card h-100">
                    <img src="<?= htmlspecialchars($curso['imagen']) ?>" class="card-img-top" alt="<?= htmlspecialchars($curso['nombre']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($curso['nombre']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($curso['descripcion']) ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?= htmlspecialchars($curso['categoria']) ?></small>
                    </div>
                    <div>
                        <a href="cursos.html" class="btn btn-custom">Ver más</a>
                    </div>
              </div>
            </div>
          <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </section>



  <!-- ========== ESTADÍSTICAS ========== -->
  <section class="stats-section">
    <div class="container">
      <h2>Nuestra Academia en Números</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="stat-item">
            <h3>2,500+</h3>
            <p>Estudiantes</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="stat-item">
            <h3>120+</h3>
            <p>Profesores</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="stat-item">
            <h3>45+</h3>
            <p>Cursos Disponibles</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== TESTIMONIOS ========== -->
  <section class="section-testimonios">
    <div class="container">
      <h2>Lo que dicen nuestros estudiantes</h2>
      <div class="row g-4">
        <div class="col-md-6">
          <div class="testimonial-card">
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=80&h=80&fit=crop&crop=face" alt="María" class="rounded-circle" width="60" height="60">
            <div>
              <h5>María López</h5>
              <small>Estudiante de Programación Web</small>
              <p>"Los cursos son muy completos y los instructores explican de forma clara. En pocos meses pasé de no saber nada a construir mi primera aplicación web. Totalmente recomendado."</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="testimonial-card">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&h=80&fit=crop&crop=face" alt="Carlos" class="rounded-circle" width="60" height="60">
            <div>
              <h5>Carlos Méndez</h5>
              <small>Estudiante de Ciencia de Datos</small>
              <p>"La academia me dio las herramientas y la confianza para dar un giro a mi carrera. El enfoque práctico y los proyectos reales marcaron la diferencia. ¡Gracias Academia Go Tech!"</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FOOTER ========== -->
   <?php require __DIR__ . '/../layout/footer.php'; ?>