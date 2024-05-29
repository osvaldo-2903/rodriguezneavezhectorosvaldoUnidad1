<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Ollie landing page.">
    <meta name="author" content="Devcrud">
    <title>Venmus</title>

   <!--Bootstrap links--> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
   
   <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.css">

    <!-- Bootstrap + Ollie main styles -->
	<link rel="stylesheet" href="assets/css/ollie.css">

</head>
<body>
<?php
   
    if (isset($_GET['redirect']) && $_GET['redirect'] == 'true') {
        $url = 'index2.html';
        header('Location: ' . $url);
        exit();
    }
    ?>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand volver" href="?redirect=true">Volver</a>
            </div>
        </nav>
    </div>
</body>
</html>

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

    echo "<div style='border: 1px solid #ddd; padding: 15px; margin: 10px; border-radius: 5px; background-color: #f9f9f9;'>";
    echo "<div style='display: flex; align-items: center;'>";
    echo "<div style='flex-grow: 1;'>";
    echo "<h6 style='margin: 0; color: #333;'>ID: {$this->id}</h6>";
    echo "<p style='margin: 5px 0; color: #555;'><strong>Nombre:</strong> {$this->nombre}</p>";
    echo "</div>";
    echo "</div>";
    echo "<p style='color: #777; font-style: italic; margin-top: 10px;'>{$this->coment}</p>";
    echo "</div><hr style='border-top: 1px solid #ddd;'>";
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

