<!DOCTYPE html>
<html>
<head>
  <title>Registro</title>
  <!-- Incluir los estilos de Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
  <!-- Contenido del cuerpo de la página -->
  <div class="container">
    <h1>Registro</h1>

    <!-- Formulario de registro -->
    <form method="POST" action="procesar_registro.php">
      <div class="mb-3">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="contrasena">Contraseña</label>
        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
      </div>
      <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>

    <!-- Enlace para ir a la página de inicio de sesión -->
    <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
  </div>

  <!-- Incluir los scripts de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
