<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CF Reus</title>
    <link rel="icon" href="images/cfreus.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/animate/animate.css">
    <link rel="stylesheet" href="assets/css/foodhut.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap">


</head>

<body>
<header>
        <div class="main-nav">
            <div class="nav-left">
                <div style="margin-right:50px;" class="dropdown">
                    <a href="#" class="language" data-lang="es">ES</a>
                    <div class="dropdown-content">
                        <a href="#" class="language" data-lang="cat">CAT</a>
                        <a href="#" class="language" data-lang="eng">ENG</a>
                    </div>
                </div>
                
                <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a>
                <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                
            </div>
            <div class="nav-center">
                <a href="index.php"><img src="images/cfreus.png" alt="Escudo del Club" class="club-logo"></a>
            </div>
            <div class="nav-right">
                <a href="index.php">Inicio</a>
                <div class="dropdown">
                    <a href="#">Equipo</a>
                    <div class="dropdown-content">
                        <a href="plantilla.php">Plantilla</a>
                        <a href="calendario.php">Calendario</a>
                        <a href="clasificacion.php">Clasificación</a>
                        <a href="equipacion.php">Equipación</a>
                    </div>
                </div>
                <a href="noticias.php">Noticias</a>
                <a href="historia.php">Club</a>
                <a href="campo.php">Campo</a>
                <a href="contacto.php">Contacto</a>
            </div>
        </div>
    </header>


    <div class="filters">
        <button onclick="filterSelection('porteros')">Porteros</button>
        <button onclick="filterSelection('defensas')">Defensas</button>
        <button onclick="filterSelection('centrocampistas')">Centrocampistas</button>
        <button onclick="filterSelection('delanteros')">Delanteros</button>
        <button onclick="filterSelection('staff-tecnico')">Staff Técnico</button>
    </div>

    <div class="card-container">
        <!--PORTEROS-->
        <div class="card porteros">
            <div class="card-inner">
                <div class="card-front">
                    <img src="images/jugador.png" alt="Jugador 1">
                    <div class="card-info">
                        <h3>Portero 1</h3>
                        <p>#1</p>
                    </div>
                </div>
                <div class="card-back">
                    <h3>Portero 1</h3>
                    <p>Partidos: 25</p>
                    <p>Goles: 0</p>
                    <p>Asistencias: 2</p>
                </div>
            </div>
        </div>
        <div class="card porteros">
            <div class="card-inner">
                <div class="card-front">
                    <img src="images/jugador.png" alt="Jugador 1">
                    <div class="card-info">
                        <h3>Portero 1</h3>
                        <p>#1</p>
                    </div>
                    <div class="card-hover-text">Información adicional</div>
                </div>
                <div class="card-back">
                    <h3>Portero 1</h3>
                    <p>Partidos: 25</p>
                    <p>Goles: 0</p>
                    <p>Asistencias: 2</p>
                </div>
            </div>
        </div>
        

        <!--DEFENSAS-->
        <div class="card defensas">
            <div class="card-inner">
                <div class="card-front">
                    <img src="images/jugador.png" alt="Jugador 3">
                    <div class="card-info">
                        <h3>Defensa 1</h3>
                        <p>#5</p>
                    </div>
                </div>
                <div class="card-back">
                    <h3>Defensa 1</h3>
                    <p>Partidos: 30</p>
                    <p>Goles: 2</p>
                    <p>Asistencias: 3</p>
                </div>
            </div>
        </div>
        <div class="card defensas">
            <div class="card-inner">
                <div class="card-front">
                    <img src="images/jugador.png" alt="Jugador 4">
                    <div class="card-info">
                        <h3>Defensa 2</h3>
                        <p>#4</p>
                    </div>
                </div>
                <div class="card-back">
                    <h3>Defensa 2</h3>
                    <p>Partidos: 28</p>
                    <p>Goles: 1</p>
                    <p>Asistencias: 2</p>
                </div>
            </div>
        </div>

        <!--CENTROCAMPISTAS-->
        <div class="card centrocampistas">
            <div class="card-inner">
                <div class="card-front">
                    <img src="images/jugador.png" alt="Jugador 5">
                    <div class="card-info">
                        <h3>Centrocampista 1</h3>
                        <p>#8</p>
                    </div>
                </div>
                <div class="card-back">
                    <h3>Centrocampista 1</h3>
                    <p>Partidos: 32</p>
                    <p>Goles: 4</p>
                    <p>Asistencias: 5</p>
                </div>
            </div>
        </div>
        <div class="card centrocampistas">
            <div class="card-inner">
                <div class="card-front">
                    <img src="images/jugador.png" alt="Jugador 6">
                    <div class="card-info">
                        <h3>Centrocampista 2</h3>
                        <p>#6</p>
                    </div>
                </div>
                <div class="card-back">
                    <h3>Centrocampista 2</h3>
                    <p>Partidos: 30</p>
                    <p>Goles: 5</p>
                    <p>Asistencias: 7</p>
                </div>
            </div>
        </div>

        <!--DELANTEROS-->
        <div class="card delanteros">
            <div class="card-inner">
                <div class="card-front">
                    <img src="images/jugador.png" alt="Jugador 7">
                    <div class="card-info">
                        <h3>Delantero 1</h3>
                        <p>#9</p>
                    </div>
                </div>
                <div class="card-back">
                    <h3>Delantero 1</h3>
                    <p>Partidos: 28</p>
                    <p>Goles: 18</p>
                    <p>Asistencias: 4</p>
                </div>
            </div>
        </div>
        <div class="card delanteros">
            <div class="card-inner">
                <div class="card-front">
                    <img src="images/jugador.png" alt="Jugador 8">
                    <div class="card-info">
                        <h3>Delantero 2</h3>
                        <p>#11</p>
                    </div>
                </div>
                <div class="card-back">
                    <h3>Delantero 2</h3>
                    <p>Partidos: 25</p>
                    <p>Goles: 15</p>
                    <p>Asistencias: 6</p>
                </div>
            </div>
        </div>

        <!--STAFF TÉCNICO-->
        <div class="card staff-tecnico">
            <div class="card-inner">
                <div class="card-front">
                    <img src="images/jugador.png" alt="Staff Técnico">
                    <div class="card-info">
                        <h3>Entrenador</h3>
                        <p>#99</p>
                    </div>
                </div>
                <div class="card-back">
                    <h3>Entrenador</h3>
                    <p>Experiencia: 20 años</p>
                    <p>Títulos: 5</p>
                </div>
            </div>
        </div>
    </div>
    

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var cards = document.querySelectorAll('.card-inner');
    
            cards.forEach(function (card) {
                card.addEventListener('click', function () {
                    card.classList.toggle('is-flipped');
                });
            });
        });
    
        function filterSelection(categoria) {
            var cards = document.getElementsByClassName('card');
            for (var i = 0; i < cards.length; i++) {
                if (categoria === 'todos') {
                    cards[i].style.display = 'block';
                } else if (cards[i].classList.contains(categoria)) {
                    cards[i].style.display = 'block';
                } else {
                    cards[i].style.display = 'none';
                }
            }
        }
    </script>
    
    



    <footer>
        <p>&copy; 2024 CF Reus. Todos los derechos reservados.</p>
    </footer>
</body>

</html>
