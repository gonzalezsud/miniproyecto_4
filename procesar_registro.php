<?php
// Conectar a la base de datos MySQL
$conexion = mysqli_connect("localhost", "root", "", "miniproyecto");

// Verificar la conexión
if (mysqli_connect_errno()) {
  die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Obtener los datos del formulario de registro
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

// Hash de la contraseña
$contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

// Insertar los datos del usuario en la tabla correspondiente
$query = "INSERT INTO usuarios (nombre, email, contrasena) VALUES ('$nombre', '$email', '$contrasena_hash')";
$resultado = mysqli_query($conexion, $query);

if ($resultado) {
  echo "Registro exitoso. Ahora puedes iniciar sesión.";
} else {
  echo "Error al registrar el usuario: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
