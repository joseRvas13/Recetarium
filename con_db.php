<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recetarium";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos MySQL";

// Cerrar la conexión
$conn->close();
?>
