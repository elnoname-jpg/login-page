<?php
header('Content-Type: application/json');

$inputJSON = file_get_contents('php://input');
$data = json_decode($inputJSON, true);


if (isset($data['NombreMin']) && isset($data['NombreMax'])) {

    $min = (int) $data['NombreMin'];
    $max = (int) $data['NombreMax'];

    if ($min > $max) {
        $response = [
            "status" => "error",
            "message" => "Min doit être inférieur à Max"
        ];
    } else {
        $random = rand($min, $max);

        $response = [
            "status" => "success",
            "randomNumber" => $random
        ];
    }

} else {
    $response = [
        "status" => "error",
        "message" => "Données manquantes"
    ];
}

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
