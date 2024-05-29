<?php
require_once '../public_html/assets/php/conexion_bd.php';
session_start();

if(isset($_POST['registrar'])) 
{
	
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
    $sql=$cnnPDO->prepare("INSERT INTO usuarios
    (nombre, apellido, email, pass) VALUES (:nombre, :apellido, :email, :pass)");
    $sql->bindParam(':nombre',$nombre);
    $sql->bindParam(':apellido',$apellido);
    $sql->bindParam(':email',$email);
    $sql->bindParam(':pass',$pass);
    $sql->execute();
    unset($sql);
    unset($cnnPDO);
    echo '<center><h4>Producto Registrado Exitosamente</h4></center>';
        
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

    <!-- Bootstrap + Ollie main styles -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="assets/css/ollie.css">
    <link rel="stylesheet" href="assets/css/registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <nav id="scrollspy" class="navbar navbar-light bg-light navbar-expand-lg fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="assets/imgs/logo.png" alt="" class="brand-img"><img src="assets/imgs/venmus-Photoroom.png-Photoroom.png" alt="" width="20%" height="10%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Acerca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testmonial">Testmonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#buzon">Buzón</a>
                    </li>
                    <li class="nav-item ml-0 ml-lg-4">
                        <div class="dropdown">
                            <a class="btn btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: rgb(224, 78, 78);color: white; ">
                              Acceso
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="login.html">Iniciar Sesion</a></li>
                              <li><a class="dropdown-item" href="registro.html">Registrarme</a></li>
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
                <div class="formulario" style="width: 350px; height: 80%; background-color: rgb(255, 255, 255); border-radius: 15px; margin-top: 60px;">
                    <center><form method="post">
                        <br>
                        <img src="assets/imgs/Snake.png" width="50px" alt="" srcset="">
                        <h5 class="tiutlo"> ¿Nuevo integrante? </h5>
                        <p>Registrate aqui</p>
                            <div class="inputs">
                                <div class="mb-1" style="margin-top: 5%;">
                                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                                    <input type="text" class="input_registro" id="nombre" name="nombre"> 
                                </div>
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                                    <input type="text" class="input_registro" id="apellido" name="apellido"> 
                                </div>
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" class="input_registro" id="email" name="email"> 
                                </div>
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                                    <input type="password" class="input_registro" id="pass" name="pass"> 
                                </div> 
                                    <button type="submit" class="btn btn-danger" style="margin-top: 10px; border-radius: 10px; width: 130px; " id="entrar" name="registrar">Registrarme</button>
                            </div>
                    </center></form>
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
   

<!-- Alertas para validar llenado de datos-->
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
        $(document).ready(function(){
          $('#entrar').click(function(){
      
          if ($("#nombre").val() == ""){
               Swal.fire({
                       // icon: 'error',
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Favor de Ingresar tu Nombre!',
                        showConfirmButton: true,
                        confirmButtonText: 'Aceptar',
                        timerProgressBar: true,
                        timer: 2500
                      });
      
              return false;
            }
            if ($("#apellido").val() == ""){
               Swal.fire({
                       // icon: 'error',
                       icon: 'error',
                        title: 'Oops...',
                        text: 'Favor de Ingresar tu Apellido!',
                        showConfirmButton: true,
                        confirmButtonText: 'Aceptar',
                        timerProgressBar: true,
                        timer: 2500
                      });
      
              return false;
            }
            if ($("#email").val() == ""){
               Swal.fire({
                       // icon: 'error',
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Favor de Ingresar tu Correo!',
                        showConfirmButton: true,
                        confirmButtonText: 'Aceptar',
                        timerProgressBar: true,
                        timer: 2500
                      });
      
              return false;
            } if ($("#pass").val() == ""){
               Swal.fire({
                       // icon: 'error',
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Favor de Ingresar tu Clave!',
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
<!-- Alertas para validar llenado de datos-->

