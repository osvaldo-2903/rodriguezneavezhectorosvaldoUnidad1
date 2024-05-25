<?php
$servername = "localhost";
$username = "root"; // Cambia esto al usuario de la base de datos
$password = ""; // Cambia esto a la contraseña de la base de datos
$dbname = "venmus"; // Cambia esto al nombre de tu base de datos

try {
    // Crea una instancia de PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Realiza operaciones con la base de datos aquí (por ejemplo, consultas SELECT, INSERT, etc.)

    // Muestra un mensaje si la conexión es exitosa
    echo "Conexión exitosa a la base de datos.";

} catch (PDOException $e) {
    // Captura el error y redirige a la página de error personalizada
    header('Location: ../error.html'); // Cambia esto a la ruta de tu archivo "error.html"
    exit;
}
?>