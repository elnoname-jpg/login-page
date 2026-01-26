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
