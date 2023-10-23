<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO `usuarios`(`Id`, `Nombre`, `correo`, `usuario`, `password`)
VALUES (NULL, '$nombre_completo', '$correo', '$usuario', '$contrasena')";

$ejecutar = mysqli_query($conexion, $query);

if( $ejecutar){
    echo '
    <script>
    alert("inicia sesion")
    window.location = "../index.php"
    </script>
    ';
}
?>
