<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de Distance</title>
</head>
<body>
<h1>Calculer la Distance</h1>
<form method="POST">
    <label for="nombre">Entrez un nombre :</label>
    <input type="number" name="nombre" id="nombre" required>
    <button type="submit">Calculer</button>
</form>

<?php if ($reponse !== null): ?>
    <h2>Réponse : <?php echo $reponse; ?></h2>
<?php endif; ?>
</body>
</html>
