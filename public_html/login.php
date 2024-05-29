<?php
session_start();
class Database {
    private $host = "localhost";
    private $db_name = "venmus";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
class User {
    private $conn;
    private $table_name = "usuarios";
    public $email;
    public $password;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function login() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE email = :email AND pass = :pass LIMIT 1";
        
        $stmt = $this->conn->prepare($query);

        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));

        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":pass", $this->password);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $_SESSION['user_email'] = $this->email; // Almacena el correo electrónico del usuario en una variable de sesión
            return true;
        } else {
            return false;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);

    $user->email = $_POST['email'];
    $user->password = $_POST['pass'];

    if ($user->login()) {
        header("Location: /venmus/public_html/index2.php"); // Redirige al usuario a index2.php
    } else {
        echo "Error al iniciar sesión.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Ollie landing page.">
    <meta name="author" content="Devcrud">
    <title>Iniciar Sesion</title>

    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Bootstrap + Ollie main styles -->
    <link rel="stylesheet" href="assets/css/ollie.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav id="scrollspy" class="navbar navbar-light bg-light navbar-expand-lg fixed-top" data-spy="affix"
        data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="assets/imgs/logo.png" alt="" class="brand-img"><img
                    src="assets/imgs/venmus-Photoroom.png-Photoroom.png" alt="" width="20%" height="10%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html" style="color: white;">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Acerca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Testmonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Buzón</a>
                    </li>
                    <li class="nav-item ml-0 ml-lg-4">
                        <div class="dropdown">
                            <a class="btn btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="background-color: rgb(224, 78, 78);color: white; ">
                                Acceso
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="login.php">Iniciar Sesion</a></li>
                                <li><a class="dropdown-item" href="registro.php">Registrarme</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <header id="home" class="header">
        <div class="overlay">
            <div class="contenedor">
                <div class="formulario"
                    style="width: 350px; height: 75%; background-color: rgb(255, 255, 255); border-radius: 15px">
                    <center>
                        <form submit="return submitUserForm();" method="post">
                            <br>
                            <img src="assets/imgs/Snake.png" width="80px" alt="" srcset="">
                            <h5 class="tiutlo">¡Bienvenido! </h5>
                            <div class="inputs">
                                <div class="mb-3" style="margin-top: 5%;">
                                    <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
                                    <input type="text" class="input_sesion" id="email" name="email">
                                </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                                        <br>
                                        <input type="text" class="input_sesion" id="pass" name="pass"> 
                                    </div id="g-recaptcha-error"> 
                                    <div class="g-recaptcha" id="Captcha" data-sitekey="6LeoI-spAAAAAJb4w1XsVYSTPG4MiJ9sw_h24Rd9">
                                    </div>
                                    <button type="submit" class="btn btn-danger" style="margin-top: 10px; border-radius: 10px; width: 100px; " id="entrar" name="entrar">Entrar</button>
                            </div>
                    </center>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Owl carousel  -->
    <script src="assets/vendors/owl-carousel/js/owl.carousel.js"></script>


    <!-- Ollie js -->
    <script src="assets/js/Ollie.js"></script>

</body>

</html>

<script>
    import Swal from 'sweetalert2'

    Swal.nombre({
        icon: "error",
        title: "Oops...",
        text: "Something went wrong!",
        footer: '<a href="#">Why do I have this issue?</a>'
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#entrar').click(function () {

            if ($("#email").val() == "") {
                Swal.fire({
                    // icon: 'error',
                    icon: 'error',
                    title: '¿Algo mal?',
                    text: 'Favor de Ingresar tu Correo',
                    showConfirmButton: true,
                    confirmButtonText: 'Aceptar',
                    timerProgressBar: true,
                    timer: 2500
                });

                return false;
            } if ($("#pass").val() == "") {
                Swal.fire({
                    // icon: 'error',
                    icon: 'error',
                    title: '¿Algo mal?',
                    text: 'Favor de Ingresar tu Clave',
                    showConfirmButton: true,
                    confirmButtonText: 'Aceptar',
                    timerProgressBar: true,
                    timer: 2500
                });

                return false;
            }
        });
    });
</script>

<script>
    function submitUserForm() {
        var response = grecaptcha.getResponse();
        if(response.length == 0) {
            document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">Please fill out the reCAPTCHA field.</span>';
            return false;
        }
        return true;
    }
    
    function verifyCaptcha() {
        document.getElementById('g-recaptcha-error').innerHTML = '';
    }
    </script>