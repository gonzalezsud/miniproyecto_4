<?php
// Conectar a la base de datos MySQL
$conexion = mysqli_connect("localhost", "root", "", "miniproyecto");

// Verificar la conexión
if (mysqli_connect_errno()) {
  die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Obtener los datos del formulario de inicio de sesión
$email = $_POST['email_login'];
$contrasena = $_POST['contrasena_login'];

// Buscar el usuario en la tabla correspondiente
$query = "SELECT * FROM usuarios WHERE email='$email'";
$resultado = mysqli_query($conexion, $query);

if (mysqli_num_rows($resultado) == 1) {
  $fila = mysqli_fetch_assoc($resultado);
  $contrasena_hash = $fila['contrasena'];
  
  // Verificar la contraseña ingresada con el hash almacenado
  if (password_verify($contrasena, $contrasena_hash)) {
    echo "Inicio de sesión exitoso. ¡Bienvenido!";
  } else {
    echo "Email o contraseña incorrectos.";
  }
} else {
  echo "Email o contraseña incorrectos.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
