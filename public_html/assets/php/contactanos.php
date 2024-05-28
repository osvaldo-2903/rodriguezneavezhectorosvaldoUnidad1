<?php
// Datos de conexión a la base de datos
require_once "conexion_bd.php";

class ContactFormHandler {
    private $conn;

    public function __construct($servername, $username, $password, $dbname) {
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            exit();
        }
    }

    public function saveContact($nombre, $correo, $mensaje) {
        try {
            $sql = "INSERT INTO contactanos (Nombre, Correo, Mensaje) VALUES (:Nombre, :Correo, :Mensaje)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':Nombre', $nombre);
            $stmt->bindParam(':Correo', $correo);
            $stmt->bindParam(':Mensaje', $mensaje);

            if ($stmt->execute()) {
                header("Location: /venmus/public_html/index2.html");
                exit();
            } else {
                echo "Error al guardar el comentario.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function __destruct() {
        $this->conn = null;
    }
}

// Obtener los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['Nombre'];
    $correo = $_POST['Correo'];
    $mensaje = $_POST['Mensaje'];

    // Crear una instancia de la clase y guardar el contacto
    $contactFormHandler = new ContactFormHandler("localhost", "root", "", "venmus");
    $contactFormHandler->saveContact($nombre, $correo, $mensaje);
}
?>