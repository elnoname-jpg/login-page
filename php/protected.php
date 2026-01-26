<?php
session_start();


if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header('Location: proteger page php via une session.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Page protégée</title>
</head>
<body>

<h1>Bienvenue <?= htmlspecialchars($_SESSION['user']) ?></h1>

<p>Cette page est protégée par une session.</p>

<a href="proteger page php via une session.php">Se déconnecter</a>

</body>
</html>
