<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplier de 0 à 10</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <!-- Formulaire pour saisir un nombre avec la méthode GET -->
    <form method="get" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" name="nombre" id="nombre" required>
        <button type="submit">Multiplier</button>
    </form>

    <?php
    // Vérifier si le paramètre "nombre" est présent dans l'URL
    if (isset($_GET["nombre"])) {
        // Récupérer la valeur du champ de saisie depuis l'URL
        $nombre = $_GET["nombre"];

        // Afficher les résultats de la multiplication de 0 à 10 dans un tableau
        echo "<h2>Résultats de la multiplication pour $nombre :</h2>";
        echo "<table>
                <tr>
                    <th>Votre nombre</th>
                    <th>Multiplication</th>
                    <th>Multiple de 0 à 10</th>
                    <th>Résultat</th>
                </tr>";

        // Boucle de 0 à 10 pour afficher les résultats dans le tableau
        for ($i = 0; $i <= 10; $i++) {
            $resultat = $nombre * $i;
            echo "<tr>
                    <td>$nombre</td>
                    <td>x</td>
                    <td>$i</td>
                    <td>$resultat</td>
                </tr>";
        }

        echo "</table>"; // Fermeture du tableau
    }
    ?>

</body>
</html>
