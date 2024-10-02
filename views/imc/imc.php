<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de l'IMC</title>
</head>
<body>
<h1>Calculer l'IMC</h1>
<form method="POST">
    <label for="taille">Entrez votre taille (en mètres) :</label>
    <input type="number" step="0.01" name="taille" id="taille" required>
    <br>
    <label for="poid">Entrez votre poids (en kg) :</label>
    <input type="number" name="poid" id="poid" required>
    <br>
    <button type="submit">Calculer</button>
</form>

<?php if ($reponse !== null): ?>
    <h2><?php echo htmlspecialchars($reponse); ?></h2>
<?php endif; ?>
</body>
</html>
