<?php


$personnes = [
    ['nom' => 'Alex', 'age' => 25],
    ['nom' => 'Marie', 'age' => 30],
    ['nom' => 'Alex', 'age' => 40],
];



$nomRecherche = $_GET['nom'] ?? null;


$resultats = [];


foreach ($personnes as $personne) {
    if (!$nomRecherche || $nomRecherche === $personne['nom']) {
        $resultats[] = $personne;
    }

}


print_r($resultats);
