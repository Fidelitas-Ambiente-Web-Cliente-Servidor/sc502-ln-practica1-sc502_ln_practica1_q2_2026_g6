<?php

$pageTitle = 'Cursos - Academia Go Tech';
$pageCSS = 'cursos.css';
$pageJS = null;

require __DIR__ . '/../layout/header.php';
?>

<!-- ========== ENCABEZADO ========== -->
<header class="page-header">
    <div class="container">
        <h1>Catálogo de Cursos</h1>
        <p>
            Explora nuestra oferta académica y fortalece tus
            habilidades tecnológicas.
        </p>
    </div>
</header>

<!-- ========== FILTRO POR CATEGORÍA ========== -->
<section class="container my-4">
    <form method="GET" action="">
        <input type="hidden" name="controller" value="cursos">
        <input type="hidden" name="action" value="index">

        <label for="categoria" class="form-label">
            Filtrar por categoría
        </label>

        <div class="row">
            <div class="col-md-8 col-lg-6">
                <select
                    name="categoria"
                    id="categoria"
                    class="form-select"
                >
                    <option value="">Todas las categorías</option>

                    <?php foreach ($categorias as $categoria): ?>
                        <option
                            value="<?= htmlspecialchars($categoria) ?>"
                            <?= $categoriaSeleccionada === $categoria
                                ? 'selected'
                                : '' ?>
                        >
                            <?= htmlspecialchars($categoria) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-4 col-lg-3 mt-3 mt-md-0">
                <button type="submit" class="btn btn-primary w-100">
                    Filtrar
                </button>
            </div>
        </div>
    </form>
</section>

<!-- ========== CATÁLOGO DE CURSOS ========== -->
<section class="container mb-5">
    <h2 class="mb-4">
        <?php if ($categoriaSeleccionada !== ''): ?>
            Cursos de <?= htmlspecialchars($categoriaSeleccionada) ?>
        <?php else: ?>
            Cursos disponibles
        <?php endif; ?>
    </h2>

    <?php if (empty($cursos)): ?>
        <div class="alert alert-warning text-center">
            No hay cursos disponibles para la categoría seleccionada.
        </div>
    <?php else: ?>
        <div class="row">

            <?php foreach ($cursos as $curso): ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card course-card">

                        <img
                            src="<?= htmlspecialchars($curso['imagen']) ?>"
                            class="card-img-top"
                            alt="<?= htmlspecialchars($curso['nombre']) ?>"
                        >

                        <div class="card-body">
                            <h5 class="card-title">
                                <?= htmlspecialchars($curso['nombre']) ?>
                            </h5>

                            <p>
                                <strong>Categoría:</strong>
                                <?= htmlspecialchars($curso['categoria']) ?>
                            </p>

                            <p class="card-text">
                                <?= htmlspecialchars($curso['descripcion']) ?>
                            </p>

                            <p>
                                <strong>Duración:</strong>
                                <?= htmlspecialchars($curso['duracion']) ?>
                                semanas
                            </p>

                            <p class="price">
                                $<?= number_format(
                                    (float) $curso['precio'],
                                    2
                                ) ?>
                            </p>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    <?php endif; ?>
</section>

<?php require __DIR__ . '/../layout/footer.php'; ?>