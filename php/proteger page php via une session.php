<?php
session_start();

if (empty($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header('Location: proteger page php via une session.php');
    exit;
}
?>
<?php




$USER = "admin";
$PASS = "1234";


$error = "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    if (
        isset($_POST['username'], $_POST['password']) &&
        $_POST['username'] === $USER &&
        $_POST['password'] === $PASS
    ) {
       
        $_SESSION['logged'] = true;
        $_SESSION['user'] = $USER;

      
        header('Location: protected.php');
        exit;
    } else {
        $error = "Identifiants incorrects";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    form { margin-top: 10px; }
    input { display: block; margin-bottom: 10px; padding: 5px; }
    button { padding: 5px 10px; }
    p.error { color: red; }
</style>
</head>
<body>

<h2>Connexion</h2>

<?php if ($error): ?>
<p class="error"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<form method="post">
    <input type="text" name="username" placeholder="Login" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit">Se connecter</button>
</form>

</body>
</html>
