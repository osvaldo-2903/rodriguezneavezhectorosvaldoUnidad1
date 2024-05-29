<?php
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "venmus";
    private $conn;

    // Constructor para inicializar la conexión a la base de datos
    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            die();
        }
    }

    // Método para obtener comentarios
    public function getComments() {
        try {
            $sql = "SELECT id, nombre, coment FROM comentarios ORDER BY id DESC";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener comentarios: " . $e->getMessage();
            return [];
        }
    }

    // Destructor para cerrar la conexión a la base de datos
    public function __destruct() {
        $this->conn = null;
    }
}

class Comment {
    private $id;
    private $nombre;
    private $coment;

    public function __construct($id, $nombre, $coment) {
        $this->id = htmlspecialchars($id);
        $this->nombre = htmlspecialchars($nombre);
        $this->coment = htmlspecialchars($coment);
    }

    // Método para mostrar el comentario
    public function display() {
        echo "<div>";
        echo "<h3>{$this->id}</h3>";
        echo "<p>{$this->nombre}</p>";
        echo "<small>{$this->coment}</small>";
        echo "</div><hr>";
    }
}

// Uso de las clases
$db = new Database();
$comments = $db->getComments();

if (count($comments) > 0) {
    foreach ($comments as $row) {
        $comment = new Comment($row['id'], $row['nombre'], $row['coment']);
        $comment->display();
    }
} else {
    echo "No hay comentarios.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>