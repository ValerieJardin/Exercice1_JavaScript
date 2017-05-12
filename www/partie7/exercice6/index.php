<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <title>Exercice 6 de la partie 7 du PHP</title>
        <!--Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire 
        ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, 
        c'est l'inverse. Utiliser qu'une seule page.-->
    </head>
    <body>
        <p>
            Mon formulaire :
        </p> 
        <!--Utilisaton de la fonction if(isset): "ce que l'on doit faire", à savoir que les 2 points signifient que 
        ce qui à après eux fait partie du if soit ici c'est echo, le tout est suivi d'un endif; -->
        <?php if (isset($_POST['gender']) && isset($_POST['lastname']) && isset($_POST['firstname'])): ?>
            <p>Bonjour : <?php echo strip_tags($_POST['gender']) . ' ' . strip_tags($_POST['firstname']) . ' ' . strip_tags($_POST['lastname']) . ' !'; ?></p>
            <!-- Bouton de retour au formulaire -->
            <div class="buttons">
                Pour changer les informations, <a href="index.php"><button>Cliquez ici</button></a> pour revenir au formulaire.
            </div>
        <?php endif; ?>
        <?php if (!isset($_POST['gender']) && ! isset($_POST['lastname']) && ! isset($_POST['firstname'])): ?>
            <form action="index.php" method="POST">
                <p>
                    <select name="gender">
                        <option>Monsieur</option>
                        <option>Madame</option>
                    </select>
                    <input type="text" name="lastname" placeholder="Nom de famille" />
                    <input type="text" name="firstname" placeholder="Prénom" />
                    <input type="submit" value="Valider" />
                </p>
            </form>
        <?php endif; ?>
            <div class="buttons">
            <a class="button" href="http://partie7/exercice1/index.php" title="Exercice 1">Exercice 1</a>
            <a class="button" href="http://partie7/exercice2/index.php" title="Exercice 2">Exercice 2</a>
            <a class="button" href="http://partie7/exercice3/index.php" title="Exercice 3">Exercice 3</a>
            <a class="button" href="http://partie7/exercice4/index.php" title="Exercice 4">Exercice 4</a>
            <a class="button" href="http://partie7/exercice5/index.php" title="Exercice 5">Exercice 5</a>
            <a class="button" href="http://partie7/exercice6/index.php" title="Exercice 6">Exercice 6</a>
            <a class="button" href="http://partie7/exercice7/index.php" title="Exercice 7">Exercice 7</a>
            <a class="button" href="http://partie7/exercice8/index.php" title="Exercice 8">Exercice 8</a>
        </div>
    </body>
</html>