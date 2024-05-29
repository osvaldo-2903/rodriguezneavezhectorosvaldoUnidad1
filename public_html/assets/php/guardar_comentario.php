<?php
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "venmus";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host={$this->servername};dbname={$this->dbname};charset=utf8mb4", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
        return $this->conn;
    }
}

class Comentario {
    private $conn;
    private $table_name = "comentarios";

    public $nombre;
    public $comentario;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function save() {
        $sql = "INSERT INTO " . $this->table_name . " (nombre, coment) VALUES (:nombre, :coment)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':coment', $this->comentario);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $comentario = $_POST['coment'];

    // Crear una instancia de la conexión a la base de datos
    $database = new Database();
    $db = $database->getConnection();

    // Crear una instancia del comentario
    $coment = new Comentario($db);

    // Asignar los datos del formulario al objeto comentario
    $coment->nombre = $nombre;
    $coment->comentario = $comentario;

    // Guardar el comentario
    if ($coment->save()) {
        header("Location: /venmus/public_html/comentarios.php");
        exit();
    } else {
        echo "Error al guardar el comentario.";
    }
}
?>