<?php
header('Content-Type: application/json');

// Récupérer le JSON envoyé
$inputJSON = file_get_contents('php://input');
$data = json_decode($inputJSON, true);

if(isset($data['nom']) && isset($data['age'])){
    $nom = htmlspecialchars($data['nom']);
    $age = (int)$data['age'];

    $response = [
        "envoyer" => "success",
        "message" => "Bonjour $nom, vous avez $age ans"
    ];
} else {
    $response = [
        "envoyer?" => "error",
        "message" => "Données manquantes"
    ];
}

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
