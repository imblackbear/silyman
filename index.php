<!DOCTYPE html>
<html lang="es">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SILYMAN</title>
    <!--BOOSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/slider.css">
    <!--Responsive-->
    <link rel="stylesheet" href="./styles/tablet.css" media="(min-width: 550px)">
    <link rel="stylesheet" href="./styles/laptop-small.css" media="(min-width: 900px)">
    <link rel="stylesheet" href="./styles/laptop-high.css" media="(min-width: 1250px)">
    <link rel="stylesheet" href="./styles/desktop.css" media="(min-width: 1550px)">
    <!--Scroll-->
    <script src="./JS/smooth-scroll.min.js"></script>
    <script>
        smoothScroll.init({
            selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
            selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
            speed: 1700, // Integer. How fast to complete the scroll in milliseconds
            easing: 'easeInOutCubic', // Easing pattern to use
            offset: 95, // Integer. How far to offset the scrolling anchor location in pixels
            callback: function(anchor, toggle) {} // Function to run after scrolling
        });
    </script>

</head>

<body>
    <!--Navegación-->
    <nav class="navbar navbar-expand-lg navbar-fixed-top">
        <div class="container-fluid">
            <a data-scroll class="navbar-brand img-logo" href="#sec-1">
                <img class="logo-sily" src="./img/logo.png" alt="logo de silyman">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a data-scroll class="nav-link" href="#sec-1">Inicio </a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="#sec-2">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="#sec-3">Cotización</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="#sec-4">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="user-main/login.php">Iniciar sesión </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <header class="header" id="sec-1">
        <div class="header-video">
            <video src="./video/presentation.mp4" muted autoplay loop></video>
        </div>
        <div class="header-overlay"></div>
        <div class="header-content">
            <h2>PRODUCTOS NATURALES</h2>
            <p>En SYLIMAN nos preocupamos por la salud de nuetros clientes, utilizando productos 100% naturales.</p>
            <a href="./user-main/login.php" class="btn btn-contratar">¡Contrata ya!</a>
        </div>
    </header>

    <!--Nosotros-->
    <section class="aboutus" id="sec-2">
        <div class="aboutus--title">
            <h3>¿QUIENES SOMOS?</h3>
            <p> SILYMAN es una compañía mexicana experta en la eliminación de plagas que brinida sus servicios desde el 2001, desde entonces hemos tenido un crecimiento sostenido con base en nuestro personal altamente capacitado, lo que nos ha permitido consolidarnos en el ramo industrial, comercial, alimenticio y doméstico, ampliando cada vez más nuestra cartera de clientes en varias ciudades del país</p>
        </div>
        <div class="row">
            <div class="aboutus-container primary-color col-md-4">
                <img src="./img/mission.png" class="aboutus--img"></img>
                <h6><b>MISIÓN</b></h6>
                <p>Ser una empresa eficiente y competitiva dedicada al control de plagas, que se distinga por ofrecer servicios de calidad, confianza, seguridad, cuidado al medio ambiente y costos competitivos a nuestros clientes. </p>
            </div>
            <div class="aboutus-container second-color col-md-4">
                <img src="./img/values.png" class="aboutus--img "></img>
                <h6><b>VISIÓN</b></h6>
                <p>Satisfacer las necesidades y urgencias del cliente dando Apoyo Continuo y Especializado, de manera efectiva y segura</p>
            </div>
            <div class="aboutus-container third-color col-md-4">
                <img src="./img/objective.png" class="aboutus--img "></img>
                <h6><b>OBJETIVO</b></h6>
                <p>En Fumigaciones SILYMAN, nuestro principal objetivo es proteger y eliminar las instalaciones residenciales, comerciales e industriales contra plagas indeseables de cucarachas, alacranes, termitas, roedores e incluso serpientes. </p>
            </div>
        </div>
    </section>


    <div class="service-container justify-content-center align-self-center" id="sec-3">
        <!--Pueba de nuevo acomodo-->
        <div class="container">
            <div class="service-title col-12">
                <h2>En SILYMAN nos comprometemos en acabar con las plagas, nuestros servicios de fumigación son los siguientes:</h2>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center align-self-center servicees">
                <div class="col">
                    <div class="plague--container">
                        <h3>Moscas</h3>
                        <img src="./img/mosca.png" class="plague--img">
                    </div>
                </div>
                <div class="col">
                    <div class="plague--container">
                        <h3>Cucarachas</h3>
                        <img src="./img/cucaracha.png" class="plague--img">
                    </div>
                </div>
                <div class="col">
                    <div class="plague--container">
                        <h3>Avispas</h3>
                        <img src="./img/avispa.png" class="plague--img">
                    </div>
                </div>
                <div class="col">
                    <div class="plague--container">
                        <h3>Alacranes</h3>
                        <img src="./img/alacran.png" class="plague--img">
                    </div>
                </div>
                <div class="col">
                    <div class="plague--container">
                        <h3>Ratones</h3>
                        <img src="./img/rata.png" class="plague--img">
                    </div>
                </div>
                <div class="col">
                    <div class="plague--container">
                        <h3>Hormigas</h3>
                        <img src="./img/hormiga.png" class="plague--img">
                    </div>
                </div>
                <div class="col">
                    <div class="plague--container">
                        <h3>Termitas</h3>
                        <img src="./img/termita.png" class="plague--img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contacto-->
    <div class="cotizacion">
        <div class="contacto-container">
            <div class="row">
                <div class="col-md-6 ">
                    <img src="./img/fumigacion.jpg" alt="fumigacion" class="img-fluid d-none d-md-block">
                </div>

                <div class="cotizacion-title col-md-6 text-center justify-content-center align-self-center">
                    <h2 class="title-contacto">Cotización</h2>
                    <h6 class="subtitle-contacto">Ofrecemos un programa de fumgación que elimina el total de las plagas en cualquier espacio.</h6>
                    <p class="p-contacto">Para generar una cotización inicia sesión en tu cuenta o crea una nueva.</p>
                    <a href="./user-main/login.php" class="btn btn-cotizacion">¡Generar cotización!</a>
                </div>
            </div>
        </div>

        <div class="testimonio-container">
            <h3 class="testimonios-title ">TESTIMONIOS</h3>
            <section id="testim" class="testim">
                <!--         <div class="testim-cover"> -->
                <div class="wrap">

                    <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                    <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                    <ul id="testim-dots" class="dots">
                        <li class="dot active"></li>
                        <!--
                    -->
                        <li class="dot"></li>
                        <!--
                    -->
                        <li class="dot"></li>
                        <!--
                    -->
                        <li class="dot"></li>
                        <!--
                    -->
                        <li class="dot"></li>
                    </ul>

                    <div id="testim-content" class="cont">
                        <div class="active">
                            <div class="img">
                                <img src="https://randomuser.me/api/portraits/men/9.jpg" alt="">
                            </div>
                            <h2><b>Alessandro Cardenas</b></h2>
                            <p>"Muchas gracias a la empresa “SILYMAN” por su eficiente y pronto servicio para el exterminio de una plaga de hormigas que estaban afectando mi jardín interior y áreas verdes exteriores de la casa. Eficiencia, calidad y estupendos presupuestos. ¡Recomendable la empresa!"</p>
                        </div>

                        <div>
                            <div class="img"><img src="https://randomuser.me/api/portraits/women/16.jpg" alt=""></div>
                            <h2><b>Brenda Carrillo</b></h2>
                            <p>"Feliz por la calidad y presupuestos accesibles de la empresa fumigadores al sanitizar mi hogar y de otros familiares, mi confianza para esta empresa."</p>
                        </div>

                        <div>
                            <div class="img"><img src="https://randomuser.me/api/portraits/women/26.jpg" alt=""></div>
                            <h2><b>Marian Alarcon</b></h2>
                            <p>"Llevo contratando sus servicios desde que iniciaron, ya que cuento con un negocio familiar. Excelente servicio. Los recomiendo."</p>
                        </div>

                        <div>
                            <div class="img"><img src="https://randomuser.me/api/portraits/men/66.jpg" alt=""></div>
                            <h2><b>Joaquín Echeverria</b></h2>
                            <p>"Desde que contraté sus servicios, he podido estar tranquila tanto en el tema de las plagas que había en mi hogar."</p>
                        </div>

                        <div>
                            <div class="img"><img src="https://randomuser.me/api/portraits/men/11.jpg" alt=""></div>
                            <h2><b>Rubén Barrera</b></h2>
                            <p>"Gracias a ellos, se terminó mi plaga de alacranes. Tienen un muy buen servicio, los recomiendo ampliamente."</p>
                        </div>

                    </div>

                </div>
                <!--         </div> -->
            </section>
        </div>

        <div class="ubicacion-container" id="sec-4">
            <div class="title-map">
                <h2 class="title justify-content-center align-self-center"><b>¿DÓNDE NOS UBICAMOS?</b></h2>
            </div>

            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.9005275840295!2d-100.25785738454428!3d25.740802915746542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662eb33cafa1ba7%3A0xec2f70fe3c252783!2sPedro%20Chapa%20521%2C%20Unidad%20Laboral%201er%20Sector%2C%2066440%20San%20Nicol%C3%A1s%20de%20los%20Garza%2C%20N.L.!5e0!3m2!1ses-419!2smx!4v1619561257420!5m2!1ses-419!2smx" style="border:0; width:100%; height:500px; margin:0; padding:0" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>

        <footer class="footer">
            <div class="container">
                <div class="row col-md-12">
                    <div class="col-md-8 left-footer">
                        <div class="footer-img">
                            <img src="./img/logo.png" alt="">
                        </div>
                        <div class="">
                        </div>
                    </div>
                    <div class="col-md-4 right-footer">
                        <ul>
                            <h3><b>Contacto</b></h3>
                            <li><a href="https://api.whatsapp.com/send?phone=8116401497"><img src="./img/whatsapp.svg" alt="">811-640-1497 </a></li>
                            <li><a href="tel:8126324702"><img src="./img/telefono.svg" alt=""> 812-632-4702 </a></li>
                            <li><a href="mailto:oscar59mx@hotmail.com"><img src="./img/correo.svg" alt=""> oscar59mx@hotmail.com</a></li>
                            <li><a href="https://goo.gl/maps/S9q2eDGandRpXgrz5"><img src="./img/ubicacion.svg" alt="">Pedro Chapa 521, San Nicolás </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="down-footer">
                        <h6>© 2021 SILYMAN. Todos los derechos reservados.</h6>
                    </div>
    </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
    <script src="./JS/script.js"></script>
    <!--BOOSTRAP JAVASCRIPT-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>