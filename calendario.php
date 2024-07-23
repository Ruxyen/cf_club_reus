<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>CF REUS</title>

    <!-- External Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/animate/animate.css">
    <link rel="stylesheet" href="assets/css/foodhut.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/calendario.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap">

    <style>
        .container {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 100px; /* Adjust if needed to fit under the navbar */
        }
        .logos {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
        }
        .logos img {
            width: 80px;
            height: auto;
        }
        .score {
            font-size: 24px;
            font-weight: bold;
            margin: 0 20px;
        }
        .location {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
        }
        .location img {
            width: 24px;
            height: auto;
            margin-right: 10px;
        }
        .button {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
        }
        .button img {
            width: 24px;
            height: auto;
            margin-right: 10px;
        }
        .button a {
            text-decoration: none;
            color: black;
            background-color: #e0e0e0;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button a:hover {
            background-color: #d0d0d0;
        }
        .link a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        /* Styles for carousel and calendar */
        .carousel-container, .calendar-container {
            display: none;
            text-align: center;
        }
        .carousel {
            display: flex;
            align-items: center;
            position: relative;
            width: 100%;
        }
        .carousel-wrapper {
            display: flex;
            transition: transform 0.5s ease;
            width: 100%;
        }
        .carousel-item {
            min-width: 300px;
            margin: 0 10px;
            opacity: 0.5;
            transition: opacity 0.5s ease;
            width: 500px;
            margin:0px;
           
        }
        .carousel-item.active {
            opacity: 1;
        }
        .carousel-control {
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1000;
        }
        .prev {
            left: 0;
        }
        .next {
            right: 0;
        }
        .calendar-item {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 10px;
            padding: 10px;
            display: inline-block;
            width: 500px;
            box-sizing: border-box;
        }
        .calendar-item img {
            width: 100px;
            height: auto;
        }
        .button-toggle {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        .button-toggle button {
            padding: 10px 20px;
            background-color: #e0e0e0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .button-toggle button:hover {
            background-color: #d0d0d0;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <div class="marquee-container">
        <div class="marquee">ASCENSO A 3A CATALANA</div>
    </div>

   <!-- Navbar -->
   <nav style="margin-top:25px;" class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a style="text-shadow: black 5px 5px 5px;" class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://www.flagcolorcodes.com/data/flag-of-spain.png" class="flag-icon" alt="Spanish Flag"> ES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
                        <a class="dropdown-item" href="#" data-lang="cat">
                            <img src="https://www.flagcolorcodes.com/data/Flag-of-Catalonia.png" class="flag-icon" alt="Catalan Flag"> CAT
                        </a>
                        <a class="dropdown-item" href="#" data-lang="eng">
                            <img src="https://www.flagcolorcodes.com/data/Flag-of-Great-Britain.png" class="flag-icon" alt="English Flag"> ENG
                        </a>
                    </div>
                </li>
                <li style="margin-left:170px; text-shadow: black 5px 5px 5px;" class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
                <li style=" text-shadow: black 5px 5px 5px;" class="nav-item">
                    <a class="nav-link" href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                </li>
                <li style=" text-shadow: black 5px 5px 5px;" class="nav-item">
                    <a class="nav-link" href="https://www.tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a>
                </li>
                <li style=" text-shadow: black 5px 5px 5px;" class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                </li>

            </ul>
            <a class="navbar-brand m-auto" href="index.php">
                <img style="margin-left:65px;" src="images/cfreus.png" class="brand-img" alt="Escudo del Club">
                <span class="brand-txt">CALENDARIO</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a style=" text-shadow: black 5px 5px 5px;" class="nav-link dropdown-toggle" href="#" id="equipoDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Equipo</a>
                    <div class="dropdown-menu" aria-labelledby="equipoDropdown">
                        <a class="dropdown-item" href="plantilla.php">Plantilla</a>
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


    <div style="margin-top:160px; "class="button-toggle">
        <button style="margin-right:10px;"onclick="toggleView('carousel')">Ver Carrusel</button>
        <button onclick="toggleView('calendar')">Ver Calendario</button>
    </div>

    <!-- Carrusel de eventos -->
    <div class="carousel-container" id="carousel">
        <div class="carousel">
            <button class="carousel-control prev" onclick="carouselControl(-1)">&#10094;</button>
            <div class="carousel-wrapper">
            
                <div class="carousel-item active">
                <div>23/07/2024</div>
                <div>18:00</div>
                    <div class="logos">
                        <img src="images/cfreus.png" alt="Logo Equipo 2">
                        <div class="score">0 - 2</div>
                        <img src="images/cfreus.png" alt="Logo Equipo 1">
                    </div>
                    <div class="location">
                    <span class="ti-location-pin pr-3"></span>
                        <div>Campo de fútbol Les Borges</div>
                    </div>
                    <div class="button">
                    <i style="font-size:30px; margin-right:10px;" alt="alineación" class="fas fa-clipboard-check"></i>
                        <a href="#">Alineación</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="logos">
                        <img src="images/cfreus.png" alt="Logo Equipo 1">
                        <div class="score">2 - 0</div>
                        <img src="images/cfreus.png" alt="Logo Equipo 2">
                    </div>
                    <div class="location">
                    <span class="ti-location-pin pr-3"></span>
                        <div>Campo de fútbol Les Borges</div>
                    </div>
                    <div class="button">
                    <i style="font-size:30px; margin-right:10px;" alt="alineación" class="fas fa-clipboard-check"></i>
                        <a href="#">Alineación</a>
                    </div>
                </div>
                <!-- Agregar más elementos del carrusel aquí -->
            </div>
            <button class="carousel-control next" onclick="carouselControl(1)">&#10095;</button>
        </div>
    </div>

    <!-- Calendario de eventos -->
    <div class="calendar-container" id="calendar">
        <div class="calendar-item">
            <div class="logos">
                <img src="images/cfreus.png" alt="Logo Equipo 2">
                <div class="score">0 - 2</div>
                <img src="images/cfreus.png" alt="Logo Equipo 1">
            </div>
            <div class="location">
            <span class="ti-location-pin pr-3"></span>
                <div>Campo de fútbol Les Borges</div>
            </div>
            <div class="button">
            <i style="font-size:30px; margin-right:10px;" alt="alineación" class="fas fa-clipboard-check"></i>
                <a href="#">Alineación</a>
            </div>
        </div>
        <div class="calendar-item">
            <div class="logos">
                <img src="images/cfreus.png" alt="Logo Equipo 1">
                <div class="score">2 - 0</div>
                <img src="images/cfreus.png" alt="Logo Equipo 2">
            </div>
            <div class="location">
            <span class="ti-location-pin pr-3"></span>
                <div>Campo de fútbol Les Borges</div>
            </div>
            <div class="button">
            <i style="font-size:30px; margin-right:10px;" alt="alineación" class="fas fa-clipboard-check"></i>
                <a href="#">Alineación</a>
            </div>
        </div>
        <div class="calendar-item">
            <div class="logos">
                <img src="images/cfreus.png" alt="Logo Equipo 1">
                <div class="score">2 - 0</div>
                <img src="images/cfreus.png" alt="Logo Equipo 2">
            </div>
            <div class="location">
            <span class="ti-location-pin pr-3"></span>
                <div>Campo de fútbol Les Borges</div>
            </div>
            <div class="button">
            <i style="font-size:30px; margin-right:10px;" alt="alineación" class="fas fa-clipboard-check"></i>
                <a href="#">Alineación</a>
            </div>
        </div>
        <div class="calendar-item">
            <div class="logos">
                <img src="images/cfreus.png" alt="Logo Equipo 1">
                <div class="score">2 - 0</div>
                <img src="images/cfreus.png" alt="Logo Equipo 2">
            </div>
            <div class="location">
            <span class="ti-location-pin pr-3"></span>
                <div>Campo de fútbol Les Borges</div>
            </div>
            <div class="button">
            <i style="font-size:30px; margin-right:10px;" alt="alineación" class="fas fa-clipboard-check"></i>
                <a href="#">Alineación</a>
            </div>
        </div>
        <div class="calendar-item">
            <div class="logos">
                <img src="images/cfreus.png" alt="Logo Equipo 1">
                <div class="score">2 - 0</div>
                <img src="images/cfreus.png" alt="Logo Equipo 2">
            </div>
            <div class="location">
            <span class="ti-location-pin pr-3"></span>
                <div>Campo de fútbol Les Borges</div>
            </div>
            <div class="button">
            <i style="font-size:30px; margin-right:10px;" alt="alineación" class="fas fa-clipboard-check"></i>
                <a href="#">Alineación</a>
            </div>
        </div>
        <div class="calendar-item">
            <div class="logos">
                <img src="images/cfreus.png" alt="Logo Equipo 1">
                <div class="score">2 - 0</div>
                <img src="images/cfreus.png" alt="Logo Equipo 2">
            </div>
            <div class="location">
            <span class="ti-location-pin pr-3"></span>
                <div>Campo de fútbol Les Borges</div>
            </div>
            <div class="button">
            <i style="font-size:30px; margin-right:10px;" alt="alineación" class="fas fa-clipboard-check"></i>
                <a href="#">Alineación</a>
            </div>
        </div>
       
    </div>

    <!-- Footer -->

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

    <!-- Copyright -->
    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>
                document.write(new Date().getFullYear())
            </script> By <a href="https://github.com/Ruxyen">Ruxyen</a></p>
    </div>

    <script>
        function toggleView(view) {
            var carouselContainer = document.getElementById('carousel');
            var calendarContainer = document.getElementById('calendar');
            
            if (view === 'carousel') {
                carouselContainer.style.display = 'block';
                calendarContainer.style.display = 'none';
            } else {
                carouselContainer.style.display = 'none';
                calendarContainer.style.display = 'block';
            }
        }

        function carouselControl(direction) {
            var wrapper = document.querySelector('.carousel-wrapper');
            var activeItem = document.querySelector('.carousel-item.active');
            var items = document.querySelectorAll('.carousel-item');
            var activeIndex = Array.from(items).indexOf(activeItem);
            
            activeItem.classList.remove('active');
            var newIndex = activeIndex + direction;

            if (newIndex < 0) {
                newIndex = items.length - 1;
            } else if (newIndex >= items.length) {
                newIndex = 0;
            }

            items[newIndex].classList.add('active');
            var itemWidth = items[newIndex].offsetWidth;
            var newTransform = -newIndex * (itemWidth + 20); // 20 is the margin between items
            wrapper.style.transform = 'translateX(' + newTransform + 'px)';
        }
    </script>

    <!-- Core -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!--  Flexslider -->
    <script src="assets/vendors/flexslider/jquery.flexslider-min.js"></script>

    <!--  Fancybox -->
    <script src="assets/vendors/fancybox/jquery.fancybox.min.js"></script>

    <!--  Datetimepicker -->
    <script src="assets/vendors/datepicker/bootstrap-datepicker.js"></script>

    <!--  OWL -->
    <script src="assets/vendors/owl/owl.carousel.js"></script>

    <!-- Main -->
    <script src="assets/js/main.js"></script>
</body>

</html>
