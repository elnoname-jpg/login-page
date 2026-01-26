<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Lire un fichier TXT</title>
</head>
<body>
    <h2>Écrire un message</h2>
    <form action="index.php" method="post">
        <input type="text" name="message" placeholder="Écris ton message" required>
        <button type="submit">Envoyer</button>
    </form>


    <?php

$fichier = "messages.txt";


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['message'])) {
    $message = $_POST['message'];

    
    file_put_contents($fichier, $message . PHP_EOL, FILE_APPEND);
}


if (file_exists($fichier)) {
    echo "<h2>Messages enregistrés :</h2>";
    $contenu = file($fichier, FILE_IGNORE_NEW_LINES);
    echo "<ul>";
    foreach ($contenu as $ligne) {
        echo "<li>" . htmlspecialchars($ligne) . "</li>";
    }
    echo "</ul>";
} else {
    echo "Aucun message";
}
?>

</body>
</html>
