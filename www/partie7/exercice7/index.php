<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <title>Exercice 7 de la partie 7 du PHP</title>
        <!--Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est 
        demandé à l'exercice 6, le nom et l'extension du fichier.-->
    </head>
    <body>
        <p>
            Mon formulaire :
        </p>
        <?php
        // Utilisation de la fonction isset() pour vérifier que les différentes variables existent
        if (isset($_POST['gender']) && isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_FILES['myFile']) && $_FILES['myFile']['error'] == 0) {
            /** Récupération de  l'extension du fichier dans une variable. La fonction pathinfo() renvoie un tableau 
              contenant entre autres l'extension du fichier dans $fileName['extension']. On stocke cela dans 
              une variable $fileType. **/
            $fileName = pathinfo($_FILES['myFile']['name']);
            $fileType = $fileName['extension'];
            echo 'Bonjour ' . $_POST['gender'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . ' votre fichier ' . basename($_FILES['myFile']['name']) . ' a bien été reçu.';
        } else {
            echo'<form action="index.php" method="POST" enctype="multipart/form-data">
            <p>
                <select name="gender">
                    <option>Monsieur</option>
                    <option>Madame</option>
                </select>
                <input type="text" name="lastname" />
                <input type="text" name="firstname" />
                <input type="file" name="myFile" />
                <input type="submit" value="Valider" />
            </p>
        </form>';
        }
        ?>
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