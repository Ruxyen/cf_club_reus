<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partido CF Reus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .container {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
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
    </style>
</head>
<body>
    <div class="container">
        <div class="date-time">
            <p>12/07/2024</p>
            <p>18h</p>
        </div>
        <div class="logos">
            <img src="cfreus.png" alt="CF Reus Logo 1">
            <div class="score">
                <span id="score1">-</span> VS <span id="score2">-</span>
            </div>
            <img src="cfreus.png" alt="CF Reus Logo 2">
        </div>
        <div class="location">
        <span class="ti-location-pin pr-3"></span>
            <a href="https://www.google.com/maps/place/Campo+de+fútbol+Les+Borges" target="_blank">Campo de fútbol Les Borges</a>
        </div>
        <div class="button">
        <i style="font-size:30px;" alt="alineación" class="fas fa-clipboard-check"></i>
            <a href="alineacion.php">Alineación</a>
        </div>
    </div>

    <script>
        // Example JavaScript to set scores dynamically
        document.getElementById('score1').textContent = 2;
        document.getElementById('score2').textContent = 1;
    </script>
</body>
</html>
