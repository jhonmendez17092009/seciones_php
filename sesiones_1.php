<?php
session_start();

$_SESSION["nombre"] = "Carlos";

echo "Bienvenido Carlos <br>";
echo "La sesión fue creada <br>";
?>

<a href="perfil.php">Ir al perfil</a>