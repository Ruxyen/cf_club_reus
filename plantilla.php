<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>CF REUS</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/animate/animate.css">
    <link rel="stylesheet" href="assets/css/foodhut.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/plantilla.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap">

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
                    <a style="text-shadow: black 5px 5px 5px;" class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
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
                <li style="margin-left:170px; text-shadow: black 5px 5px 5px;" class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                </li>
                <li style=" text-shadow: black 5px 5px 5px;" class="nav-item">
                    <a class="nav-link" href="https://www.twitter.com" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                </li>
                <li style=" text-shadow: black 5px 5px 5px;" class="nav-item">
                    <a class="nav-link" href="https://www.tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a>
                </li>
                <li style=" text-shadow: black 5px 5px 5px;" class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com" target="_blank"><i
                            class="fab fa-facebook"></i></a>
                </li>

            </ul>
            <a class="navbar-brand m-auto" href="index.php">
                <img style="margin-left:65px;" src="images/cfreus.png" class="brand-img" alt="Escudo del Club">
                <span class="brand-txt">PLANTILLA</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a style=" text-shadow: black 5px 5px 5px;" class="nav-link dropdown-toggle" href="#" id="equipoDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Equipo</a>
                    <div class="dropdown-menu" aria-labelledby="equipoDropdown">
                        <a class="dropdown-item" href="calendario.php">Calendario</a>
                        <a class="dropdown-item" href="clasificacion.php">Clasificación</a>
                        <a class="dropdown-item" href="equipacion.php">Equipación</a>
                    </div>
                </li>

                <li style=" text-shadow: black 5px 5px 5px;" class="nav-item">
                    <a class="nav-link" href="noticias.php">Noticias</a>
                </li>
                <li style=" text-shadow: black 5px 5px 5px;" class="nav-item">
                    <a class="nav-link" href="historia.php">Club</a>
                </li>
                <li style=" text-shadow: black 5px 5px 5px;" class="nav-item">
                    <a class="nav-link" href="campo.php">Campo</a>
                </li>
                <li style=" text-shadow: black 5px 5px 5px;" class="nav-item">
                    <a class="nav-link" href="galeria.php">Galería</a>
                </li>
                <li style=" text-shadow: black 5px 5px 5px;" class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
                <li style=" text-shadow: black 5px 5px 5px;" class="nav-item">
                    <a class="nav-link" href="alineacion.php">
                        <i style="font-size:30px;" alt="alineación" class="fas fa-clipboard-check"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Player Cards Section -->
    <div class="card-container">
        <div class="player-card-container">
            <div class="player-card" onclick="this.classList.toggle('clicked')">
                <img src="images/jugador.png" alt="Player Image">
                <div class="player-info">
                    <h3>Gerard - 10</h3>

                    <p>Partidos: 25</p>
                    <p>Paradas: 10</p>
                </div>
                <div class="player-back">
                    <h3>Historial</h3>
                    <p>2018/19: Altafulla</p>
                    <p>2020/21: Sant Pere i Sant Pau</p>
                    <p>2023/24: Reus</p>
                </div>
            </div>
        </div>
        <!-- Repeat .player-card-container for each player -->
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
