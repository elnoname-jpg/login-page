<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Somme de 2 chiffres</title>
</head>
<body>
    <h2>Calculer la somme de 2 chiffres</h2>
    <form action="POST 2x.php" method="post">
        <input type="number" name="chiffre1" placeholder="Premier chiffre" required>
        <input type="number" name="chiffre2" placeholder="Deuxième chiffre" required>
        <button type="submit">Calculer</button>
    </form>

  <?php
  if($_POST['chiffre1'] !== null ) && ($_POST['chiffre2'] !== null) {
    $a = $_POST['chiffre1'];
    $b = $_POST['chiffre2'];

    $somme = $a + $b;
    echo "<p>La somme de $a et $b est : <strong>$somme</strong></p>";

  }
  
  
  
  ?>
</body>
</html>
