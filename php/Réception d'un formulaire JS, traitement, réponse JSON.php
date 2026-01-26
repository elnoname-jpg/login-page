<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Formulaire JSON</title>
</head>
<body>

<form id="monFormulaire">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
    <br>
    <label for="age">Âge :</label>
    <input type="number" id="age" name="age" required>
    <br>
    <button type="submit">Envoyer</button>
</form>

<div id="resultat"></div>

<script>
document.getElementById('monFormulaire').addEventListener('submit', function(e){
    e.preventDefault(); // empêche le rechargement de la page

    // Récupérer les données du formulaire
    const formData = {
        nom: document.getElementById('nom').value,
        age: document.getElementById('age').value
    };

    // Envoyer les données au serveur en POST
    fetch('traitement2.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'  // on envoie du JSON
        },
        body: JSON.stringify(formData)
    })
    .then(response => response.json()) // on attend le JSON en retour
    .then(data => {
        // Afficher la réponse du serveur
        document.getElementById('resultat').innerText = JSON.stringify(data, null, 2);
    })
    .catch(error => console.error('Erreur:', error));
});
</script>

</body>
</html>
