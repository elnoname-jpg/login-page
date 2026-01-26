<?php
$temperature = [
    "Lundi" => 12,
    "Mardi" => 15,
    "Mercredi" => 18,
    "Jeudi" => 20,
    "Vendredi" => 19,
    "Samedi" => 17,
    "Dimanche" => 14
];
header('Content-Type: json');

echo json_encode($temperature);
?>