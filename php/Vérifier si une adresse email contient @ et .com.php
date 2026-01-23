<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérifier si une adresse email contient @ et .com</title>
</head>
<body>
    <a href="exercices.php">Retour</a>
    <form method="POST">
    <label for="email">adresse email:</label>
    <input type="text" name="email" id=adresse_email>
    <input type="submit" value="Verifié">
    </form>
    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = htmlspecialchars($_POST["email"]);

        if(strpos($email, '@') !== false && strpos($email, '.com') !== false){
            echo "<p>email validé.</p>";
        }else if(){
        echo "<p>email non validé l'email doit contenir @ et .com</p>";

        }
    }
    
    ?>
</body>
</html>