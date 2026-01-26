<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id='randomNumberForm'>
    <label for="generate">Generate Random Number</label>
    <input type="number" id="min" name="min" placeholder="Min" required>
    <input type="number" id="max" name="max" placeholder="Max" required>
    <button type="submit" id="generate">Generate</button>
    </form>
    <div id="result"></div>
    <script>
document.getElementById('randomNumberForm').addEventListener('submit', function(e){
    e.preventDefault();

    const NombreAleatoire = {
        NombreMin: parseInt(document.getElementById('min').value),
        NombreMax: parseInt(document.getElementById('max').value)
    };

    if (NombreAleatoire.NombreMin > NombreAleatoire.NombreMax) {
        document.getElementById('result').innerText = "Min doit être inférieur à Max";
        return;
    }

    fetch('traitement3.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(NombreAleatoire)
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('result').innerText = JSON.stringify(data, null, 2);
    })
    .catch(error => console.error('Erreur:', error));
});
</script>

    
</body>
</html>