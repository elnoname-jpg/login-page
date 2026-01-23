<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculer le carré</title>
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #f0f2f5;
            font-family: Arial, sans-serif;
            gap: 20px;
        }

        a.retour {
            text-decoration: none;
            color: #ffffff;
            background: rgba(255, 255, 255, 0.08);
            padding: 10px 20px;
            border-radius: 8px;
            transition: all 0.25s ease;
            font-weight: bold;
        }

        a.retour:hover {
            background: #b76ef5;
            color: #fff;
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(183,110,245,0.7);
        }

        .container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            padding: 25px;
            width: 400px;

            background: linear-gradient(135deg, #2e1e3f, #4a2d6b); /* violet foncé */
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.25);

            color: #ffffff;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="number"] {
            padding: 8px 10px;
            border-radius: 6px;
            border: none;
            width: 100%;
            margin-top: 5px;
        }

        input[type="submit"] {
            margin-top: 15px;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            background: #b76ef5;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        input[type="submit"]:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(183,110,245,0.7);
        }

        .result {
            margin-top: 15px;
            padding: 10px;
            border-radius: 8px;
            background: rgba(255,255,255,0.08);
            color: #b76ef5;
            text-align: center;
            text-shadow: 0 0 10px rgba(183,110,245,0.6);
        }
    </style>
</head>
<body>
    <a href="exercices.php" class="retour">⬅ Retour</a>

    <div class="container">
        <form method="POST">
            <label for="nombre">Nombre :</label>
            <input type="number" name="nombre" id="nombre" required>

            <input type="submit" value="Calculer le carré">
        </form>

        <?php
        function carre($x) {
            return $x * $x;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            echo '<div class="result">Le carré de ' . $nombre . ' est ' . carre($nombre) . '</div>';
        }
        ?>
    </div>
</body>
</html>
