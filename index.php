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
</head>
<body>
    <!--Navegación-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img class="logo-sily" src="./img/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#inicio">Inicio </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Iniciar sesión </a>                      
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!--Header-->
    <header class="main-header" id="inicio">
        <div class="background-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Slogan de silyman</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores voluptas vitae qui commodi est consectetur sit quis aliquid ea quo excepturi autem accusantium optio distinctio, molestiae, et alias dolores quae?
                        </p>
                        <a href="" class="btn btn-outline-success text-white">Contrata ya</a>
                    </div>
                    <div class="roach-container col-md-6 ">
                        <img src="./img/plagas.jpg" alt="fumigacion" class="roach img-fluid d-none d-md-block">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--Nosotros-->
    <section class="aboutus" id="nosotros">
            <div class="aboutus--title">
                
                    <h3> Expertos en eliminación de plagas</h3>
                    <p> SILYMAN es una compañía mexicana fundada en el año 1984, desde entonces hemos tenido un crecimiento sostenido con base en nuestro personal altamente capacitado, lo que nos ha permitido consolidarnos en el ramo industrial, comercial, alimenticio y doméstico, ampliando cada vez más nuestra cartera de clientes en varias ciudades del país</p>
                
            </div>
            <div class="row">
                <div class="aboutus-container primary-color col-md-4">
                    <img src="./img/mission.png" class="aboutus--img"></img>
                    <h6>MISIÓN</h6>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem deserunt ratione, culpa iure iste incidunt, asperiores rerum accusamus quia iusto provident non nisi?</p>
                </div>
                <div class="aboutus-container second-color col-md-4">
                    <img src="./img/values.png" class="aboutus--img "></img>
                    <h6>VALORES</h6>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem deserunt ratione, culpa iure iste incidunt, asperiores rerum accusamus quia iusto provident non nisi?</p>
                </div>
                <div class="aboutus-container third-color col-md-4">
                    <img src="./img/objective.png" class="aboutus--img "></img>
                    <h6>OBJETIVO</h6>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem deserunt ratione, culpa iure iste incidunt, asperiores rerum accusamus quia iusto provident non nisi?</p>
                </div>
            </div>
    </section>

    <!--PLagues-->
    <section class="services" id="servicios">
        <div class="container">
            <div class="services-container">
                <div class="service--mosca row">
                    <figure class="col-3">
                            <img src="./img/mosca.png" alt="" class="service--img">
                    </figure>
                    <div class="services-info col-9">
                        <h3>Moscas</h3>
                        <p>Las cucarachas son como un autobús de enfermedades.
                            El tráfico constante entre heces y comida hace que las cucarachas suelten y recojan un gran número de virus, parásitos y patógenos en su ruta.</p> 
                    </div>                 
                </div>
                <div class="service--cucaracha row">
                    <figure class="col-3">
                        <img src="./img/cucaracha.png" alt="" class="service--img">
                    </figure>
                    <div class="services-info col-9">
                        <h3>Cucarachas</h3>
                        <p>Las cucarachas son como un autobús de enfermedades.
                            El tráfico constante entre heces y comida hace que las cucarachas suelten y recojan un gran número de virus, parásitos y patógenos en su ruta.</p> 
                    </div>
                </div>
                <div class="service--avispa row">
                    <figure class="col-3">
                        <img src="./img/avispa.png" alt="" class="service--img">
                    </figure>
                    <div class="services-info col-9">
                        <h3>Avispas</h3>
                        <p>Las cucarachas son como un autobús de enfermedades.
                            El tráfico constante entre heces y comida hace que las cucarachas suelten y recojan un gran número de virus, parásitos y patógenos en su ruta.</p> 
                    </div>
                </div>
                <div class="service--alacranes row">
                    <figure class="col-3">
                        <img src="./img/alcran.png" alt="" class="service--img">
                    </figure>
                    <div class="services-info col-9">
                        <h3>Alacranes</h3>
                        <p>Las cucarachas son como un autobús de enfermedades.
                            El tráfico constante entre heces y comida hace que las cucarachas suelten y recojan un gran número de virus, parásitos y patógenos en su ruta.</p> 
                    </div>
                </div>
                <div class="service--ratones row">
                    <figure class="col-3">
                        <img src="./img/rata.png" alt="" class="service--img">
                    </figure>
                    <div class="services-info col-9">
                        <h3>Ratones</h3>
                        <p>Las cucarachas son como un autobús de enfermedades.
                            El tráfico constante entre heces y comida hace que las cucarachas suelten y recojan un gran número de virus, parásitos y patógenos en su ruta.</p> 
                    </div>    
                </div>
                <div class="service--hormigas row">
                    <figure class="col-3">
                        <img src="./img/hormiga.png" alt="" class="service--img">
                    </figure> 
                    <div class="services-info col-9">
                        <h3>Hormigas</h3>
                        <p>Las cucarachas son como un autobús de enfermedades.
                            El tráfico constante entre heces y comida hace que las cucarachas suelten y recojan un gran número de virus, parásitos y patógenos en su ruta.</p> 
                    </div>
                </div>
                <div class="service--termita row">
                    <figure class="col-3">
                        <img src="./img/termita.png" alt="" class="service--img">
                    </figure>
                    <div class="services-info col-9">
                        <h3>Termitas</h3>
                        <p>Las cucarachas son como un autobús de enfermedades.
                            El tráfico constante entre heces y comida hace que las cucarachas suelten y recojan un gran número de virus, parásitos y patógenos en su ruta.</p> 
                    </div>
                </div>
        </div>
    </section>


    <!--BOOSTRAP JAVASCRIPT-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>