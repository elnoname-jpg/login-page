<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP</title>
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f0f2f5;
            font-family: Arial, sans-serif;
        }

        .lien_exercices {
            display: flex;
            flex-direction: column;
            gap: 15px;
            padding: 25px;
            width: 420px;

            background: linear-gradient(135deg, #1e1e2f, #2c2c54);
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.25);

            max-height: 600px;
            overflow-y: auto;

            color: #ffffff;
        }

        /* cacher la scrollbar */
        .lien_exercices::-webkit-scrollbar {
            display: none; 
        }
        .lien_exercices {
            -ms-overflow-style: none;  
            scrollbar-width: none;     
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .header strong {
            font-size: 32px;
            color: #b76ef5; /* violet principal */
            text-transform: capitalize;
            filter: drop-shadow(0 0 20px rgba(183,110,245,0.8)); /* glow violet */
            transition: all 0.25s ease;
        }

        .header strong:hover {
            transform: scale(1.1);
        }

        .lien_exercices a {
            text-decoration: none;
            color: #ffffff;
            background: rgba(255, 255, 255, 0.08);
            padding: 10px 14px;
            border-radius: 8px;
            transition: all 0.25s ease;
        }

        /* hover violet avec glow */
        .lien_exercices a:hover {
            background: #b76ef5; 
            color: #fff;
            transform: scale(1.10);
            box-shadow: 0 0 15px rgba(183,110,245,0.7);
        }
    </style>
</head>
<body>

    <div class="lien_exercices">
        <div class="header">
            <strong>exercices PHP</strong>
        </div>
        <a href="echo hello world plus Bonjour prenom.php">echo hello world + Bonjour ["prenom"]</a>
        <a href="formulaire_en_POST.php">Formulaire en POST</a>
        <a href="boucle for de 1 à 10.php">Boucle for de 1 à 10</a>
        <a href="Lire un fichier data.json contenant une liste de noms.php">Fichier data.json</a>
        <a href="Afficher les infos d'un utilisateur via un tableau associatif.php">Tableau associatif</a>
        <a href="fonction carre($x).php">Fonction carre($x)</a>
        <a href="Vérifier si une adresse email contient @ et .com.php">email contient @ et .com?</a>
        <a href="Page Principale.php">header.php dans une page principale</a>
        <a href="fichier txt.php">Lire un fichier .txt</a>
        <a href="POST 2x.php">Recevoir 2 chiffres en POST</a>
        <a href="données JSON formatées.php">données JSON formatées</a>
        <a href="Réception d'un formulaire JS, traitement, réponse JSON.php">Réception d'un formulaire JS et reponse JSON</a>
        <a href="NombreAleatoire.php">générateur à nombre aleatoire</a>
        <a href="logger requête.php">logger requête</a>
        <a href="proteger page php via une session.php">protéger page php via une session</a>
        <a href="retourner des resultats filtre.php">resultats filtre</a>
        <a href="Afficher le jour de la semaine en php avec get.php">afficher le jouer de la semaine en php</a>
    </div>

</body>
</html>
