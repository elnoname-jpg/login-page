<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des prénoms depuis data.json</title>
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
            background: #b76ef5; /* violet hover */
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
            text-align: center;
        }

        h1 {
            color: #b76ef5;
            text-shadow: 0 0 15px rgba(183,110,245,0.8);
            transition: all 0.3s ease;
        }

        h1:hover {
            transform: scale(1.05);
        }

        p {
            font-size: 20px;
            color: #b76ef5;
            text-shadow: 0 0 10px rgba(183,110,245,0.6);
            margin: 5px 0;
            transition: all 0.25s ease;
        }

        p:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <a href="exercices.php" class="retour">⬅ Retour</a>

    <div class="container">
        <h1>Liste des prénoms depuis data.json</h1>
        <?php
        $json = file_get_contents("data.json");
        $data = json_decode($json, true);
        foreach ($data['prenoms'] as $prenom) {
            echo "<p>$prenom</p>";
        }
        ?>
    </div>
</body>
</html>
