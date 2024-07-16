<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>CF REUS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="assets/vendors/animate/animate.css">

    <!-- Bootstrap + FoodHut main styles -->
    <link rel="stylesheet" href="assets/css/foodhut.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap">

    <style>
        *{
            font-family: 'Roboto Condensed', sans-serif;
        }
        .flag-icon {
            width: 20px;
            height: 15px;
            margin-right: 5px;
        }

        .marquee-container {
            width: 100%;
            background-color: #ffcc00;
            color: black;
            text-align: center;
            overflow: hidden;
            height: 55px;
            /* Aproximadamente dos dedos */
            line-height: 50px;
            /* Centra el texto verticalmente */
            font-size: 1.8em;
            /* Tamaño del texto */
            position: relative;
            letter-spacing: 5px;
            /* Espaciado entre letras */
        }

        .marquee {
            display: inline-block;
            position: absolute;
            white-space: nowrap;
            animation: marquee 10s linear infinite alternate;
        }

        @keyframes marquee {
            0% {
                left: 0;
            }

            100% {
                left: 100%;
            }
        }

        .header h1 {
            background: linear-gradient(to right, #ff3333, #000); /* Degradado rojo a negro */
            -webkit-background-clip: text; /* Clip degradado al texto */
            color: transparent; /* Hace el texto transparente para mostrar el degradado */
            animation: color-change 5s infinite alternate; /* Animación para cambiar colores */
            font-weight: bold;
            font-size:75px; top:-275px; position:relative;
     
        }
        .header h2 {
         
            margin: 10px 0;
            color: #fffb00; /* Color amarillo */
            font-weight: bold;
            font-style: italic;
            font-size:30px; top:-290px; position:relative;
        }
        .header #plantilla {
           
            border: 2px solid #fff; /* Borde blanco */
            color: #ffffff;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s; /* Transición suave */
            border-radius: 10px; /* Bordes redondeados */
            padding:5px;
            font-weight: bold;
            background-color: rgb(184, 14, 14);
            font-size: 30px; top: -55px; position: relative;
        }
        .header #plantilla:hover {
            background-color: #fff; /* Fondo blanco al pasar el ratón */
            color: #333; /* Texto oscuro al pasar el ratón */
            background-color: rgb(255, 217, 0);
        }

        @keyframes color-change {
            0% {
                color: #ff3333; /* Empieza en rojo */
            }
            50% {
                color: #000; /* Cambia a negro a la mitad */
            }
            100% {
                color: #ff3333; /* Vuelve a rojo al final */
            }
        }
 

.navbar-nav .nav-link {
    position: relative;
    color: black;
    text-decoration: none;
    display: inline-block;
    padding-bottom: 5px;
    margin-right: 20px;
    transition: color 0.3s;
    box-shadow:black 3px 3px 3px;
    border-radius:5px;
    color:black;
    background-color: black;
}

.navbar-nav .nav-link,
.dropdown-menu .dropdown-item {
    font-size: 20px; /* Puedes ajustar este valor según necesites */
    
}

/* Pseudo-elemento ::before para la línea */
.navbar-nav .nav-link::before,
.navbar-nav .nav-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    width: 0;
    height: 2px;
    background-color: transparent;
    transition: width 0.3s ease-out, background-color 0.3s ease-out;
}

/* Pseudo-elemento ::before para la línea roja */
.navbar-nav .nav-link::before {
    left: 0;
}

/* Pseudo-elemento ::after para la línea negra */
.navbar-nav .nav-link::after {
    right: 0;
}

/* Hover effect para el enlace */
.navbar-nav .nav-link:hover::before,
.navbar-nav .nav-link:hover::after {
    width: 100%;
    background-color: #ff3333;
   
}

/* Estilo para los enlaces del menú desplegable */
.navbar-nav .dropdown-menu .dropdown-item {
    position: relative;
    transition: color 0.3s;
}

/* Pseudo-elementos ::before y ::after para los enlaces del menú desplegable */
.navbar-nav .dropdown-menu .dropdown-item::before,
.navbar-nav .dropdown-menu .dropdown-item::after {
    content: '';
    position: absolute;
    bottom: 0;
    width: 0;
    height: 2px;
    background-color: transparent;
    transition: width 0.3s ease-out, background-color 0.3s ease-out;
}

/* Pseudo-elemento ::before para la línea roja en el desplegable */
.navbar-nav .dropdown-menu .dropdown-item::before {
    left: 0;
}

/* Pseudo-elemento ::after para la línea negra en el desplegable */
.navbar-nav .dropdown-menu .dropdown-item::after {
    right: 0;
}

/* Hover effect para los enlaces del menú desplegable */
.navbar-nav .dropdown-menu .dropdown-item:hover::before,
.navbar-nav .dropdown-menu .dropdown-item:hover::after {
    width: 100%;
    background-color: #ff3333;
}

/* Otros estilos para los enlaces */
.navbar-nav .nav-link:hover,
.navbar-nav .dropdown-menu .dropdown-item:hover {
    color: #ff3333;
}

/* Estilo para el enlace "Equipo" cuando está activo */
.navbar-nav .nav-item.dropdown.show .nav-link,
.navbar-nav .nav-item.dropdown:hover .nav-link {
    color: #fff; /* Color blanco */
}

/* Estilo para el enlace "Equipo" en el menú desplegable cuando está activo */
.navbar-nav .dropdown-menu .dropdown-item.active {
    color: #fff; /* Color blanco */
}

/* Añade margen top para el dropdown-menu */
.dropdown-menu {
    margin-top: 2px; /* Puedes ajustar este valor según necesites */
}

        
      

    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <div class="marquee-container">
        <div class="marquee">ASCENSO A 3A CATALANA</div>
    </div>
    <!-- Navbar -->
    <nav style="margin-top:25px;" class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix"
        data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://www.flagcolorcodes.com/data/flag-of-spain.png" class="flag-icon"
                            alt="Spanish Flag"> ES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
                        <a class="dropdown-item" href="#" data-lang="cat">
                            <img src="https://www.flagcolorcodes.com/data/Flag-of-Catalonia.png" class="flag-icon"
                                alt="Catalan Flag"> CAT
                        </a>
                        <a class="dropdown-item" href="#" data-lang="eng">
                            <img src="https://www.flagcolorcodes.com/data/Flag-of-Great-Britain.png" class="flag-icon"
                                alt="English Flag"> ENG
                        </a>
                    </div>
                </li>
                <li style="margin-left:170px;" class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.twitter.com" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com" target="_blank"><i
                            class="fab fa-facebook"></i></a>
                </li>

            </ul>
            <a class="navbar-brand m-auto" href="index.php">
                <img style="margin-left:65px;" src="images/cfreus.png" class="brand-img" alt="Escudo del Club">
                <span class="brand-txt">CF REUS</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="equipoDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Equipo</a>
                    <div class="dropdown-menu" aria-labelledby="equipoDropdown">
                        <a class="dropdown-item" href="plantilla.php">Plantilla</a>
                        <a class="dropdown-item" href="calendario.php">Calendario</a>
                        <a class="dropdown-item" href="clasificacion.php">Clasificación</a>
                        <a class="dropdown-item" href="equipacion.php">Equipación</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="noticias.php">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="historia.php">Club</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="campo.php">Campo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galeria.php">Galería</a>
                </li>
                <li  class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="alineacion.php">
                        <i style="font-size:30px;" alt="alineación" class="fas fa-clipboard-check"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 >REUS DE TOTA LA VIDA</h1>
            <h2 >Desde 2022</h2>
            <a id="plantilla"  href="plantilla.php">
                PLANTILLA <i class="fas fa-file-alt"></i>
            </a>
            <h2 style="font-size:30px; top:150px; position:relative;">Oportunidad de dar un salto internacional a Arabia
            </h2>
            <a id="sabermas" style="font-size: 25px; top: 150px; position: relative; color: white; border: 2px solid white; border-radius: 5px; padding: 3px;" href="arabia.php">
                Saber más <i class="fas fa-plus"></i>
            </a>
            
        </div>
    </header>

    <!--  About Section  -->
    <div id="about" class="container-fluid wow fadeIn" id="about" data-wow-duration="1.5s">
        <div class="row">
            <div class="col-lg-6 has-img-bg"></div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">Sobre nosotros</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, quisquam accusantium
                            nostrum modi, nemo, officia veritatis ipsum facere maxime assumenda voluptatum enim! Labore
                            maiores placeat impedit, vero sed est voluptas!Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Expedita alias dicta autem, maiores doloremque quo perferendis, ut
                            obcaecati harum, <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum
                            necessitatibus iste,
                            nulla recusandae porro minus nemo eaque cum repudiandae quidem voluptate magnam voluptatum?
                            <br>Nobis, saepe sapiente omnis qui eligendi pariatur. quis voluptas. Assumenda facere
                            adipisci quaerat. Illum doloremque quae omnis vitae.</p>
                        <p><b>Lonsectetur adipisicing elit. Blanditiis aspernatur, ratione dolore vero asperiores
                                explicabo.</b></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ab itaque modi, reprehenderit
                            fugit soluta, molestias optio repellat incidunt iure sed deserunt nemo magnam rem explicabo
                            vitae. Cum, nostrum, quidem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <!-- CONTACT Section  -->
    <div id="contact" class="container-fluid bg-dark text-light border-top wow fadeIn">
        <div class="row">

            <div class="col-md-6 px-5 has-height-lg middle-items">
                <h3>Dónde nos encontramos</h3><br>
                <p>Nuestro campo de fútbol está ubicado en el corazón de Reus, en el Camp de futbol Les Borges. <br>Ven
                    y disfruta de nuestros partidos en un ambiente familiar y apasionado.</p>
                <br>
                <div class="text-muted">
                    <p><span class="ti-location-pin pr-3"></span> Campo de fútbol Les Borges, Plaça Ua 1, Ua 3-10, Ua
                        12,UA18, 94, 43350 Les Borges del Camp, Tarragona</p>
                    <p><span class="ti-support pr-3"></span> (+34) 987 654 321</p>
                    <p><span class="ti-email pr-3"></span>cf_club_reus@gmail.com</p>
                </div>
            </div>
            <div class="col-md-6 px-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6006.095565216915!2d1.0144997!3d41.177125!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a14f6a434a4a6d%3A0xafcc2742f134e0c9!2sCamp%20de%20futbol%20Les%20Borges!5e0!3m2!1sfr!2ses!4v1720693797516!5m2!1sfr!2ses"
                    width="920" height="500" style="border:2px solid white; margin:10px; border-radius: 15px;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>


    <!-- page footer -->
    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-2">
                <h4>Porteros</h4>
                <ul class="list-unstyled">
                    <li><a href="portero1.php" class="text-light">Portero 1</a></li>
                    <li><a href="portero2.php" class="text-light">Portero 2</a></li>
                    <li><a href="portero3.php" class="text-light">Portero 3</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h4>Defensas</h4>
                <ul class="list-unstyled">
                    <li><a href="defensa1.php" class="text-light">Defensa 1</a></li>
                    <li><a href="defensa2.php" class="text-light">Defensa 2</a></li>
                    <li><a href="defensa3.php" class="text-light">Defensa 3</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h4>Centrocampistas</h4>
                <ul class="list-unstyled">
                    <li><a href="centrocampista1.php" class="text-light">Centrocampista 1</a></li>
                    <li><a href="centrocampista2.php" class="text-light">Centrocampista 2</a></li>
                    <li><a href="centrocampista3.php" class="text-light">Centrocampista 3</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h4>Delanteros</h4>
                <ul class="list-unstyled">
                    <li><a href="delantero1.php" class="text-light">Delantero 1</a></li>
                    <li><a href="delantero2.php" class="text-light">Delantero 2</a></li>
                    <li><a href="delantero3.php" class="text-light">Delantero 3</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h4>Staff Técnico</h4>
                <ul class="list-unstyled">
                    <li><a href="staff1.php" class="text-light">Staff 1</a></li>
                    <li><a href="staff2.php" class="text-light">Staff 2</a></li>
                    <li><a href="staff3.php" class="text-light">Staff 3</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; Copyright
            <script>document.write(new Date().getFullYear())</script> > By <a
                href="https://github.com/Ruxyen">Ruxyen</a>
        </p>
    </div>
    <!-- end of page footer -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="assets/vendors/wow/wow.js"></script>

    <!-- google maps -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- FoodHut js -->
    <script src="assets/js/foodhut.js"></script>

    

</body>

</html>