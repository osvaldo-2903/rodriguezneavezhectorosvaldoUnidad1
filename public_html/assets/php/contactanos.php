<?php
// Datos de conexión a la base de datos
require_once "conexion_bd.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "venmus";

try {
    // Crear una conexión PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    // Establecer el modo de error de PDO para que lance excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtener los datos del formulario
    $Nombre = $_POST['Nombre'];
    $Correo = $_POST['Correo'];
    $Mensaje = $_POST['Mensaje'];

    // Preparar y ejecutar la consulta SQL
    $sql = "INSERT INTO contactanos (Nombre, Correo, Mensaje ) VALUES (:Nombre, :Correo, :Mensaje)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':Nombre', $Nombre);
    $stmt->bindParam(':Correo', $Correo);
    $stmt->bindParam(':Mensaje', $Mensaje);

    if ($stmt->execute()) {
        header("Location: /venmus/public_html/index2.html");
        exit();
    } else {
        echo "Error al guardar el comentario.";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Cerrar la conexión
$conn = null;
?>