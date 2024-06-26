<?php
session_start(); // Inicia una nueva sesión o reanuda la existente
?>
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
                        <a class="nav-link" href="#about">Acerca </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testmonial">Testimonios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contácto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#buzon">Buzon</a>
                    </li>
                    <li class="nav-item ml-0 ml-lg-4">
                        <div class="dropdown">
                            <a class="btn btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: rgb(224, 78, 78);color: white;border-radius: 10px; ">
                              Cierre
                            </a>
                            <ul class="dropdown-menu" style="border-radius: 10px;">
                              <li><a class="dropdown-item" href="cierre.php">Cerrar Sesion</a></li>
                            </ul>
                          </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <header id="home" class="header">
        <div class="overlay"></div>

        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">  
            <div class="container">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="carousel-title">Los mejores dispositivos<br>al mejor precio</h1>
                            <h5><?php echo "¡Bienvenido, " . $_SESSION['user_email'] . "!"; ?></h5>
                            <button type="submit" class="btn btn-primary btn-rounded" > <a class="nav-link" href="#about">Saber más</a></button>
                        </div>
                    </div>
                   
                    </div>
                </div>
            </div>        
        </div>

        <div class="infos container mb-4 mb-md-2">
            <div class="title">
                <h6 class="subtitle font-weight-normal">¿Estás en busca de buenas computadoras?</h6>
                <h5>¡Venmus es tu mejor opción!</h5>
                <p class="font-small">Encuentra el equipo que desees por el mejor precio.</p>
            </div>
            <div class="socials text-right">
                <div class="row justify-content-between">
                    <div class="col">
                        <a class="d-block subtitle"><i class="ti-microphone pr-2"></i> (844)2976845</a>
                        <a class="d-block subtitle"><i class="ti-email pr-2"></i> venmus1905@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="section" id="about">

        <div class="container">

            <div class="row align-items-center mr-auto">
                <div class="col-md-4">
                    
                    <h3 class="section-title">Acerca de nosotros</h3>
                    <p>Somos una empresa especializada a la venta de laptos y computadoras de escritorio con los mejores componentes que hay en el mercado, nuestros equipos están en condiciones perfectas y con garantia.</p>

                    
                </div>
                <div class="col-sm-6 col-md-4 ml-auto">
                    <div class="widget">
                        <div class="icon-wrapper">
                            <i class="ti-calendar"></i>
                        </div>
                        <div class="infos-wrapper">
                            <h4 class="text-primary">+15 años siendo la mejor opcion</h4>
                            <p>Experiencia</p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="icon-wrapper">
                            <i class="ti-face-smile"></i>
                        </div>
                        <div class="infos-wrapper">
                            <h4 class="text-primary">125+</h4>
                            <p>Valoraciones positivas</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="widget">
                        <div class="icon-wrapper">
                            <i class="ti-star"></i>
                        </div>
                        <div class="infos-wrapper">
                            <h4 class="text-primary">3000+</h4>
                            <p>Reseñas</p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="icon-wrapper">
                            <i class="ti-user"></i>
                        </div>
                        <div class="infos-wrapper">
                            <h4 class="text-primary">8000+</h4>
                            <p>Usuarios</p>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h6 class="xs-font mb-0">Lo mejor para tu</h6>
            <h3 class="section-title mb-4">Set Up</h3>

            <div class="row text-center">
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="assets/imgs/img-5.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Comodidad y &amp; diseño</h4>
                            <p class="xs-font">Los mejores diseños para una computadora lo puedes encontrar aquí.</p>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="assets/imgs/img-11.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Mejores gráficos</h4>
                            <p class="xs-font">Nuestros equipos poseen los mejores componentes del mercado relacionado a calidad-precio.</p>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="assets/imgs/img-7.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Excelente rendimiento</h4>
                            <p class="xs-font">Además de contar con buenos componentes, nuestros equipos poseen excelentes sistemas de enfriamiento.</p>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="portfolio">
        <div class="container">
            <h6 class="xs-font mb-0">¿No sabes que comprar?</h6>
            <h3 class="section-title pb-4">Especificaciones</h3>
       
        <div id="owl-portfolio" class="owl-carousel owl-theme mt-4">
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="assets/imgs/img-1.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page" class="box-shadow">
                <h6 class="mt-3 mb-2">Fuga asperiores</h6>
                <p class="xs-font">su sistema de enfriamiento líquido avanzado mantiene tu PC en una temperatura óptima, asegurando un rendimiento estable incluso en las sesiones de juego más intensas.</p>
            </a> 
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="assets/imgs/img-4.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page" class="box-shadow" height="60%">
                <h6 class="mt-3 mb-2">Almacenamiento y Velocidad</h6>
                <p class="xs-font">Dile adiós a los tiempos de carga largos. Con 2 TB de almacenamiento SSD NVMe, podrás instalar todos tus juegos favoritos y acceder a ellos en cuestión de segundos. Además, los 32 GB de RAM DDR5 garantizan una multitarea fluida, permitiéndote transmitir en vivo, chatear y navegar sin interrupciones.</p>
            </a> 
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="assets/imgs/img-10.jpeg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page" class="box-shadow" height="60%">
                <h6 class="mt-3 mb-2"> Diseño Innovador y Personalizable</h6>
                <p class="xs-font">Las Computadoras Venmus no solo rinde increíblemente bien, sino que también luce espectacular. Su chasis de aluminio con iluminación RGB completamente personalizable permite que tu equipo brille con tu estilo único.</p>
            </a> 
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="assets/imgs/img-8.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page" class="box-shadow">
                <h6 class="mt-3 mb-2">Sonido Envolvente</h6>
                <p class="xs-font">Sumérgete en el sonido de tus juegos con la tarjeta de sonido envolvente 7.1 integrada. La Venmus Titan GX también cuenta con múltiples puertos USB 3.2, HDMI, y DisplayPort, asegurando que puedas conectar todos tus periféricos y monitores fácilmente.</p>
            </a> 
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="assets/imgs/img-12.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page" class="box-shadow">
                <h6 class="mt-3 mb-2">Conectividad</h6>
                <p class="xs-font"> la conectividad Wi-Fi 6 y Ethernet 2.5G te proporcionan una conexión a internet rápida y estable, esencial para cualquier gamer competitivo.</p>
            </a> 
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="assets/imgs/img-9.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page" class="box-shadow">
                <h6 class="mt-3 mb-2">Actualizable y Futuro-Proof</h6>
                <p class="xs-font">Sabemos que el mundo de los videojuegos está en constante evolución. Por eso, la Venmus Titan GX ha sido diseñada para ser fácilmente actualizable. Con su amplia caja y ranuras adicionales, podrás mejorar componentes como la memoria RAM, el almacenamiento o incluso la tarjeta gráfica en el futuro sin complicaciones.</p>
            </a>  
        </div>
           
        </div>
    </section>


    <section class="section" id="testmonial">
        <div class="container">
            <h6 class="xs-font mb-0">Clientes que han comprado con nosotros.</h6>
            <h3 class="section-title">Testimonios</h3>

            <div id="owl-testmonial" class="owl-carousel owl-theme mt-4">
                <div class="item">
                    <div class="textmonial-item">
                        <img src="assets/imgs/avatar1.png" class="avatar" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <div class="des">
                            <h5 class="ti-quote-left font-weight-bold"></h5>
                            <p>La Venmus Titan GX ha transformado por completo mi experiencia de juego. Con su increíble rendimiento y gráficos de alta calidad, puedo competir al más alto nivel sin preocupaciones. ¡Definitivamente la mejor inversión que he hecho en equipo gamer!"</p>
                            <h5 class="ti-quote-left text-right font-weight-bold"></h5>

                            <div class="line"></div>
                            <h6 class="name">Calencio Lava Melano</h6>
                            <h6 class="xs-font">Jugador Competitivo de Los Sims</h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="textmonial-item">
                        <img src="assets/imgs/avatar2.png" class="avatar" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <div class="des">
                            <h5 class="ti-quote-left font-weight-bold"></h5>
                            <p>Desde que empecé a usar la Venmus Titan GX, mis transmisiones en vivo han sido más fluidas y profesionales. La velocidad y la capacidad de multitarea me permiten interactuar con mis seguidores mientras juego, todo sin retrasos. ¡Es una maravilla!</p>
                            <h5 class="ti-quote-left text-right font-weight-bold"></h5>

                            <div class="line"></div>
                            <h6 class="name">Valebria Martinete Torrale</h6>
                            <h6 class="xs-font">Streamer en Twitch</h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="textmonial-item">
                        <img src="assets/imgs/avatar3.png" class="avatar" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <div class="des">
                            <h5 class="ti-quote-left font-weight-bold"></h5>
                            <p>Soy un apasionado de la tecnología y he probado muchas PC gamers, pero la Venmus Titan GX se lleva la corona. Su diseño elegante y su rendimiento imbatible hacen que cada sesión de juego sea una experiencia increíble. ¡Altamente recomendada!</p>
                            <h5 class="ti-quote-left text-right font-weight-bold"></h5>

                            <div class="line"></div>
                            <h6 class="name">Cesario Sopes Dearaña</h6>
                            <h6 class="xs-font">Entusiasta de la Tecnología</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-overlay">

        <div class="container">
            <div class="infos mb-4 mb-md-2">
            <div class="title">
                <h6 class="subtitle font-weight-normal">¿No has encontrado lo que necesitas?</h6>
                <h5>Tenemos las mejores ofertas para ti.</h5>
                <p class="font-small">Siguenos en nuestras redes sociales o contáctanos.</p>
            </div>
            <div class="socials">
                <div class="row justify-content-between">
                    <div class="col">
                        <a class="d-block subtitle"><i class="ti-microphone"></i> +52 844 297 6845</a>
                        <a class="d-block subtitle"><i class="ti-email"></i> Venmus1905@gmail.com</a>
                    </div>
                    <div class="col">
                        <h6 class="subtitle font-weight-normal mb-1">Redes Sociales</h6>
                        <div class="social-links">
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-facebook"></i></a>
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-twitter-alt"></i></a>
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-google"></i></a>
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-pinterest-alt"></i></a>
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-instagram"></i></a>
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-rss"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        </div>
    </section>

    <section class="section" id="blog">

        <div class="container mb-3">
            <h3 class="section-title mb-5">Producto Estrella</h3>

            <div class="blog-wrapper">
                <div class="img-wrapper">
                    <img src="assets/imgs/img-3.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <div class="date-container">
                        <h6 class="day">En</h6>
                        <h6 class="mun">Oferta</h6> 
                    </div>
                </div>
                <div class="txt-wrapper">
                    <h4 class="blog-title">Nuestras Mejores Ofertas</h4>
                    <p>La Venmus Titan GX está diseñada para superar todas tus expectativas. Equipada con el último procesador Intel Core i9 de 13ª generación y una tarjeta gráfica NVIDIA GeForce RTX 4090, esta bestia es capaz de ejecutar los juegos más exigentes a la máxima configuración sin despeinarse. Experimenta velocidades de cuadro ultra altas y una calidad visual impresionante que te sumergirá por completo en cualquier mundo virtual.</p>

                    <a href="#" class="badge badge-info">12 meses de garantia</a>

                    <h6 class="blog-footer">
                        <a href="javascript:void(0)"><i class="ti-user"></i> +4000 vendidas </a> |
                        <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 568 recomiendan este producto </a> |
                        <a href="javascript:void(0)"><i class="ti-comments"></i> 316 Opiniones</a>
                    </h6>
                </div>
            </div>
            <br>
            <center><h3 class="section-title mb-5">¿Buscas algo?</h3></center>

            <nav class="navbar bg-body-primary">
                <div class="container-fluid">
                    <form class="d-flex" style="width: 100%;">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search-input">
                        <button class="btn btn" type="button" style="background-color: rgb(255, 93, 93); color: white; border-radius: 10px;" onclick="buscarProductos()">Buscar</button>
                    </form>
                </div>
            </nav>
            <br>
            <div id="resultado-busqueda" style="width: 80%; height: 100%;margin-left: 1%;"></div>
            <center>
                <br>
                <template id="producto-template">
                    <br>
                        <div class="card-body col-md-8">
                            <h5 class="card-title"></h5>
                            <img class="card-img-top" alt="Imagen del producto" style="width: 23%;" />
                            <p class="card-text"></p>
                            <button class="btn btn-primary" style="border-radius: 15px;">Comprar</button>
                        </div>
                    </div>
                </template>
                <br>
            </center>
            
            
        <style>
        .container-fluid {
            display: flex;
            align-items: center;
            }

        #search-input {
            width: 950px;
            padding: 5px;
            margin-right: 10px;
        }

        .container-fluid .btn {
            background-color: #0074D9;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        </style>
        </div>
    </section>
    <section id="contact" class="section pb-0">

        <div class="container">
            <h6 class="xs-font mb-0">Si quieres comunicarte con nosotros</h6>
            <h3 class="section-title mb-5">Contáctanos</h3>

            <div class="row align-items-center justify-content-between">
                <div class="col-md-8 col-lg-7">

                    <form id="Contactanos" action="../public_html/assets/php/contactanos.php" method="post">
                        <div class="form-row">
                            <div class="col form-group">
                                <input type="text" class="form-control" name="Nombre" placeholder="Nombre">
                            </div>
                            <div class="col form-group">
                                <input type="Correo" class="form-control" name="Correo" placeholder="Correo">
                            </div>
                        </div>
                        <div class="col form-group">
                            <textarea class="form-control" name="Mensaje" placeholder="Escribe tu mensaje"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" value="Mandar Mensaje">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 d-none d-md-block order-1">
                    <ul class="list">
                        <li class="list-head">
                            <h6>Ayuda</h6>
                        </li>
                        <li class="list-body">
                            <p class="py-2">¿Necesitas ayuda? Llámanos al numero <a href="">+52 844 297 6845:</a></p>
                            <button type="submit" class="btn btn-primary"><a href="" style="color: white;">Llámanos</a></button>
                            <p class="py-2"><i class="ti-email"></i>Venmus1905@gmail.com</p>

                        </li>
                    </ul> 
                </div>
            </div>

            <section id="buzon" class="buzon">
              <h3>Buzón</h3>
              <form id="buzon1" action="../public_html/assets/php/guardar_comentario.php" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" id="caja" class="form-label">Caja de comentarios
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" placeholder="Nombre" style="width: 500px;" aria-describedby="emailHelp">
                    <br>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="coment" placeholder="Comentario" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">¡Comparte tu experiencia con nosotros!</div>
                  
                </div>
                <button type="submit"  id="submit"  class="btn btn-primary">Enviar</button>
                <br>
                <br>
              </form>
                
            </section>

            <footer class="footer mt-5 border-top">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 text-center text-md-left">
                        <p class="mb-0">Mapa de Sitio <a href="">Venmus</a></p>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <div class="social-links">
                                <a class="nav-link" href="#home">Inicio</a>
                                <a class="nav-link" href="#about">Acerca </a>
                                <a class="nav-link" href="#portfolio">Portfolio</a>
                                <a class="nav-link" href="#testmonial">Testimonios</a>
                                <a class="nav-link" href="#blog">Ofertas</a>
                                <a class="nav-link" href="#contact">Contácto</a>
                                <a class="nav-link" href="#buzon">Buzon</a>
                        </div>
                    </div>
                </div> 
            </footer>
        </div>
    </section>
	<javascript><script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="bb5940f3-51fe-4fa0-91d8-f52877bab179";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    <script>
    
    </script>
    </javascript>
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    
    <!-- Owl carousel  -->
    <script src="assets/vendors/owl-carousel/js/owl.carousel.js"></script>


    <!-- Ollie js -->
    <script src="assets/js/Ollie.js"></script>


<!--Script sweetalert2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

</body>
</html>
<script src="../public_html/assets/js/busqueda.js"></script>
s