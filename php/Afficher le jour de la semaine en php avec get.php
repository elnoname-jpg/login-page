<?php



$dateRecue = $_GET['date'] ?? null;


if ($dateRecue) {

    $timestamp = strtotime($dateRecue);

    $jourSemaine = date('l', $timestamp);

    echo "Le jour de la semaine pour la date $dateRecue est : $jourSemaine";

} else {
    echo "Aucune date fournie dans l'URL.";
}
?>
<?php echo "<br></br>?date=2026-01-27"; ?>