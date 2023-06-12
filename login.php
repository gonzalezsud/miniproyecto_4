<!DOCTYPE html>
<html>
<head>
  <title>Iniciar sesión</title>
  <!-- Incluir los estilos de Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
  <!-- Contenido del cuerpo de la página -->
  <div class="container">
    <h1>Iniciar sesión</h1>

    <!-- Formulario de inicio de sesión -->
    <form method="POST" action="procesar_login.php">
      <div class="mb-3">
        <label for="email_login">Email</label>
        <input type="email" class="form-control" id="email_login" name="email_login" required>
      </div>
      <div class="mb-3">
        <label for="contrasena_login">Contraseña</label>
        <input type="password" class="form-control" id="contrasena_login" name="contrasena_login" required>
      </div>
      <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    </form>

    <!-- Enlace para ir a la página de registro -->
    <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
  </div>

  <!-- Incluir los scripts de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
