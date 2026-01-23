<?php
$prenom = "ali";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo hello world + Bonjour ["prenom"]</title>
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

        .message_container {
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

        h3 {
            font-size: 24px;
            color: #b76ef5; /* violet principal */
            text-shadow: 0 0 15px rgba(183,110,245,0.8);
            transition: all 0.3s ease;
        }

        h3:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <a href="exercices.php" class="retour">⬅ Retour</a>

    <div class="message_container">
        <h3>hello world</h3>
        <h3>Bonjour <?php echo $prenom; ?></h3>
    </div>
</body>
</html>
