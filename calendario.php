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

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .calendar-section {
            padding: 20px;
            text-align: center;
        }

        .calendar-container {
            display: flex;
            overflow: hidden;
            position: relative;
            align-items: center;
            justify-content: center;
            height: 500px;
            width: 100%;
        }

        .calendar-card {
            flex: 0 0 60%;
            max-width: 600px;
            min-width: 400px;
            margin: 0 20px;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: transform 0.5s ease, opacity 0.5s ease, filter 0.5s ease;
            opacity: 0.5;
            transform: scale(0.8);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: absolute;
            z-index: 1;
        }

        .calendar-card.active {
            opacity: 1;
            transform: scale(1.2);
            z-index: 3;
            filter: none;
        }

        .calendar-card.prev {
            transform: translateX(-150%) scale(0.9);
            opacity: 0.5;
            z-index: 2;
        }

        .calendar-card.next {
            transform: translateX(150%) scale(0.9);
            opacity: 0.5;
            z-index: 2;
        }

        .calendar-card img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .calendar-card .team {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .calendar-card .team span {
            margin-left: 10px;
            font-size: 1.2em;
        }

        .calendar-card .match-info {
            text-align: center;
            margin: 20px 0;
            font-size: 1.5em;
        }

        .calendar-card .match-details {
            text-align: center;
            font-size: 1em;
        }

        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            z-index: 4;
        }

        .arrow.left {
            left: 10px;
        }

        .arrow.right {
            right: 10px;
        }

        .arrow i {
            font-size: 1.5em;
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        footer .footer-content {
            margin: 0 auto;
        }

        
    </style>
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

    <main>
        <section id="calendario" class="calendar-section">
            <h2>Calendario de Partidos</h2>
            <div class="calendar-container" id="calendar-container">
                <button class="arrow left" id="prevBtn"><i class="fas fa-chevron-left"></i></button>

                <!-- Repetir este bloque para cada partido -->
                <div class="calendar-card past">
                    <div class="match-details">
                        <span class="date">Fecha: 10/01/2024</span>
                        <span class="time">Hora: 16:00</span>
                    </div>
                    <div class="match">
                        <div class="team team-left">
                            <img src="images/cfreus.png" alt="Escudo Local">
                        </div>
                        <div class="match-info">
                            <span class="score1">-</span>
                            <span class="vs">vs</span>
                            <span class="score2">-</span>
                        </div>
                        <div class="team team-right">
                            <img src="images/cfreus.png" alt="Escudo Visitante">
                        </div>
                    </div>
                    <div class="location">
                        <span><i class="fas fa-map-marker-alt"></i> Estadio Local</span>
                    </div>
                </div>
                <div class="calendar-card past">
                    <div class="team team-left">
                        <img src="images/cfreus.png" alt="Escudo Local">
                        <span>Reus de tota la vida, club de futbol B</span>
                    </div>
                    <div class="match-info">
                        <span class="vs">vs</span>
                        <span class="score">2 - 2</span>
                    </div>
                    <div class="team team-right">
                        <img src="images/cfreus.png" alt="Escudo Visitante">
                        <span>Cambrils, U.E.</span>
                    </div>
                    <div class="match-details">
                        <span>Fecha: 17/01/2024</span>
                        <span>Hora: 18:00</span>
                        <span><i class="fas fa-map-marker-alt"></i> Estadio Visitante</span>
                    </div>
                </div>
                <div class="calendar-card past">
                    <div class="team team-left">
                        <img src="images/cfreus.png" alt="Escudo Local">
                        <span>Reus de tota la vida, club de futbol C</span>
                    </div>
                    <div class="match-info">
                        <span class="vs">vs</span>
                        <span class="score">0 - 1</span>
                    </div>
                    <div class="team team-right">
                        <img src="images/cfreus.png" alt="Escudo Visitante">
                        <span>Tarragona, F.C.</span>
                    </div>
                    <div class="match-details">
                        <span>Fecha: 24/01/2024</span>
                        <span>Hora: 20:00</span>
                        <span><i class="fas fa-map-marker-alt"></i> Estadio Local</span>
                    </div>
                </div>
                <div class="calendar-card past">
                    <div class="team team-left">
                        <img src="images/cfreus.png" alt="Escudo Local">
                        <span>Reus de tota la vida, club de futbol D</span>
                    </div>
                    <div class="match-info">
                        <span class="vs">vs</span>
                        <span class="score">1 - 3</span>
                    </div>
                    <div class="team team-right">
                        <img src="images/cfreus.png" alt="Escudo Visitante">
                        <span>Vilaseca, C.F.</span>
                    </div>
                    <div class="match-details">
                        <span>Fecha: 31/01/2024</span>
                        <span>Hora: 17:00</span>
                        <span><i class="fas fa-map-marker-alt"></i> Estadio Visitante</span>
                    </div>
                </div>
                <div class="calendar-card upcoming active">
                    <div class="team team-left">
                        <img src="images/cfreus.png" alt="Escudo Local">
                        <span>Reus de tota la vida, club de futbol E</span>
                    </div>
                    <div class="match-info">
                        <span class="vs">vs</span>
                    </div>
                    <div class="team team-right">
                        <img src="images/cfreus.png" alt="Escudo Visitante">
                        <span>Sabadell, A.C.</span>
                    </div>
                    <div class="match-details">
                        <span>Fecha: 07/02/2024</span>
                        <span>Hora: 19:00</span>
                        <span><i class="fas fa-map-marker-alt"></i> Estadio Local</span>
                    </div>
                </div>
                <div class="calendar-card upcoming">
                    <div class="team team-left">
                        <img src="images/cfreus.png" alt="Escudo Local">
                        <span>Reus de tota la vida, club de futbol F</span>
                    </div>
                    <div class="match-info">
                        <span class="vs">vs</span>
                    </div>
                    <div class="team team-right">
                        <img src="images/cfreus.png" alt="Escudo Visitante">
                        <span>Lleida, C.F.</span>
                    </div>
                    <div class="match-details">
                        <span>Fecha: 14/02/2024</span>
                        <span>Hora: 18:30</span>
                        <span><i class="fas fa-map-marker-alt"></i> Estadio Visitante</span>
                    </div>
                </div>
                <div class="calendar-card upcoming">
                    <div class="team team-left">
                        <img src="images/cfreus.png" alt="Escudo Local">
                        <span>Reus de tota la vida, club de futbol G</span>
                    </div>
                    <div class="match-info">
                        <span class="vs">vs</span>
                    </div>
                    <div class="team team-right">
                        <img src="images/cfreus.png" alt="Escudo Visitante">
                        <span>Girona, F.C.</span>
                    </div>
                    <div class="match-details">
                        <span>Fecha: 21/02/2024</span>
                        <span>Hora: 20:00</span>
                        <span><i class="fas fa-map-marker-alt"></i> Estadio Local</span>
                    </div>
                </div>
                <div class="calendar-card upcoming">
                    <div class="team team-left">
                        <img src="images/cfreus.png" alt="Escudo Local">
                        <span>Reus de tota la vida, club de futbol H</span>
                    </div>
                    <div class="match-info">
                        <span class="vs">vs</span>
                    </div>
                    <div class="team team-right">
                        <img src="images/cfreus.png" alt="Escudo Visitante">
                        <span>Hospitalet, U.E.</span>
                    </div>
                    <div class="match-details">
                        <span>Fecha: 28/02/2024</span>
                        <span>Hora: 17:30</span>
                        <span><i class="fas fa-map-marker-alt"></i> Estadio Visitante</span>
                    </div>
                </div>
                <!-- Repetir hasta aquí -->

                <button class="arrow right" id="nextBtn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024. CF Reus. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        const calendarContainer = document.getElementById('calendar-container');
        const calendarCards = calendarContainer.querySelectorAll('.calendar-card');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentIndex = 4; // Inicialmente mostrar el quinto partido en el centro

        function updateCarousel() {
            calendarCards.forEach((card, index) => {
                card.classList.remove('active', 'prev', 'next');
                if (index === currentIndex) {
                    card.classList.add('active');
                } else if (index === (currentIndex - 1 + calendarCards.length) % calendarCards.length) {
                    card.classList.add('prev');
                } else if (index === (currentIndex + 1) % calendarCards.length) {
                    card.classList.add('next');
                }
            });
        }

        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex === 0) ? calendarCards.length - 1 : currentIndex - 1;
            updateCarousel();
        });

        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex === calendarCards.length - 1) ? 0 : currentIndex + 1;
            updateCarousel();
        });

        updateCarousel(); // Initialize carousel
    </script>
</body>

</html>
