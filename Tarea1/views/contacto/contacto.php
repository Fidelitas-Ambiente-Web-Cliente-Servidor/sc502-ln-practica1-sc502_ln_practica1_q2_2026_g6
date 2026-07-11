<?php
$pageTitle = 'Contacto - Go Tech';
$pageCSS   = 'contacto.css';
$pageJS    = 'contacto.js';
require __DIR__ . '/../../views/layout/header.php';
?>

<!-- Mostrar mensaje de éxito si se ha enviado el formulario correctamente -->
<?php if (!empty($exito)): ?>
  <div class="alert alert-success" id="mensajeExito">Mensaje enviado con éxito.</div>
<?php endif; ?>

<?php if (!empty($error)): ?>
  <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
<?php endif; ?>

<!-- Contenido del formulario (migración del HTML de contacto.html) -->
  <!-- ========== ENCABEZADO DE LA PÁGINA (Igual a cursos.html) ========== -->
  <header class="page-header">
    <div class="container">
      <h1>Contacto</h1>
      <p>Si tienes alguna pregunta o deseas más información sobre nuestros cursos, no dudes en contactarnos. Estamos aquí para ayudarte a transformar tu futuro con educación de excelencia.</p>
    </div>
  </header>

  <!-- ========== CONTENIDO PRINCIPAL ========== -->
  <main class="contacto-main-padding">
    <div class="container">
      <div class="row g-5 justify-content-center">
        
        <!-- 2. Formulario -->
        <div class="col-lg-6">
          <div class="contacto-card">
            <h3 class="contacto-card-title">Envíanos un mensaje</h3>
            
            <!-- Formulario HTML5  -->
            <form id="contactForm" method="POST" action="?controller=contacto&action=store">
              <div class="contacto-form-group">
                <label for="nombre">Nombre Completo</label>
                <input type="text" class="contacto-input" id="nombre" placeholder="Tu nombre completo" name="nombre" value="<?= htmlspecialchars($nombre ?? '') ?>" required>
                <span id="errorNombre" class="error-message" style="color: red; font-size: 0.85rem; display: block; margin: top 5px;"></span>
              </div>
              
              
              
              <div class="contacto-form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" class="contacto-input" id="correo" placeholder="correo@ejemplo.com" name="correo" value="<?= htmlspecialchars($correo ?? '') ?>" required>
                <span id="errorCorreo" class="error-message" style="color: red; font-size: 0.85rem; display: block; margin: top 5px;"></span>
              </div>
              
              <div class="contacto-form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" class="contacto-input" id="telefono" placeholder="+506 8888-8888" name="telefono" value="<?= htmlspecialchars($telefono ?? '') ?>" required>
                <span id="errorTelefono" class="error-message" style="color: red; font-size: 0.85rem; display: block; margin: top 5px;"></span>
              </div>
              
              <div class="contacto-form-group">
                <label for="asunto">Asunto</label>
                <input type="text" class="contacto-input" id="asunto" placeholder="Motivo de tu consulta" name="asunto" value="<?= htmlspecialchars($asunto ?? '') ?>" required>
                <span id="errorAsunto" class="error-message" style="color: red; font-size: 0.85rem; display: block; margin: top 5px;"></span>
              </div>
              
              <div class="contacto-form-group">
                <label for="mensaje">Mensaje</label>
                <textarea class="contacto-input contacto-textarea" id="mensaje" rows="4" placeholder="Escribe tu consulta aquí..." name="mensaje" required><?= htmlspecialchars($mensaje ?? '') ?></textarea>
                <span id="errorMensaje" class="error-message" style="color: red; font-size: 0.85rem; display: block; margin: top 5px;"></span>
              </div>
              
              <div class="contacto-btn-container">
                <button type="submit" class="contacto-btn" id="btnEnviar">Enviar Mensaje</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Columna Derecha: Información y mapa -->
        <div class="col-lg-5">
          <div class="contacto-col-derecha">
            
            <!-- 3. Información de contacto de la academia -->
            <div class="contacto-card">
              <h3 class="contacto-card-title">Información de Contacto</h3>
              
              <div class="contacto-info-item">
                <div class="contacto-icon-container">
                  <img src="https://cdn-icons-png.flaticon.com/512/3095/3095583.png" alt="Ubicación" width="28" height="28">
                </div>
                <div class="contacto-info-text">
                  <h5>Dirección</h5>
                  <p>Calle 5 Avenida 2, Heredia, Costa Rica</p>
                </div>
              </div>

              <div class="contacto-info-item">
                <div class="contacto-icon-container">
                  <img src="https://cdn-icons-png.flaticon.com/512/3059/3059502.png" alt="Teléfono" width="28" height="28">
                </div>
                <div class="contacto-info-text">
                  <h5>Teléfono</h5>
                  <p><a href="tel:+506 GOTECH00(46832400)">+506 GOTECH00(46832400)</a></p>
                </div>
              </div>

              <div class="contacto-info-item">
                <div class="contacto-icon-container">
                  <img src="https://cdn-icons-png.flaticon.com/512/2099/2099199.png" alt="Correo" width="28" height="28">
                </div>
                <div class="contacto-info-text">
                  <h5>Correo Electrónico</h5>
                  <p><a href="mailto:info@gotech.com">info@gotech.com</a></p>
                </div>
              </div>
            </div>

            <!-- 4. Mapa incrustado con <iframe> -->
            <div class="mapa-container">
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62865.04571939105!2d-84.14811651817448!3d9.99613149633633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fb785a676c81%3A0x28876c24385289f6!2sHeredia%2C%20Costa%20Rica!5e0!3m2!1sen!2scr!4v1716584200000!5m2!1sen!2scr" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php if (!empty($exito)): ?>
<script>
    setTimeout(function () {
        let alerta = document.getElementById("mensajeExito");
        if (alerta) {
            alerta.style.display = "none";
        }
    }, 3000);
</script>
<?php endif; ?>

<?php require __DIR__ . '/../../views/layout/footer.php'; ?>
