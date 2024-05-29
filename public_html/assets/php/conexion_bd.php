<?php
class Database {
    private $servername = "localhost";
    private $username = "root"; // Cambia esto al usuario de la base de datos
    private $password = ""; // Cambia esto a la contraseña de la base de datos
    private $dbname = "venmus"; // Cambia esto al nombre de tu base de datos
    private $charset = "utf8mb4";
    private $connPDOPDO;

    public function __construct() {
        try {
            $dsn = "mysql:host={$this->servername};dbname={$this->dbname};charset={$this->charset}";
            $this->connPDO = new PDO($dsn, $this->username, $this->password);
            $this->connPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa a la base de datos.";
        } catch (PDOException $e) {
            header('Location: ../error.html'); // Cambia esto a la ruta de tu archivo "error.html"
            exit;
        }
    }

    public function getConnPDOection() {
        return $this->connPDO;
    }

    // Puedes agregar más métodos para interactuar con la base de datos aquí, por ejemplo:
    public function query($sql, $params = []) {
        try {
            $stmt = $this->connPDO->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    // Método para cerrar la conexión (opcional)
    public function closeConnPDOection() {
        $this->connPDO = null;
    }
}

?>