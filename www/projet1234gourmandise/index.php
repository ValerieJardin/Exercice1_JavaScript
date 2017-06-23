<?php
// On inclut le model puis le controller; le sens d'inclusion est impératif.
include_once 'model/foods.php';
include_once 'model/breakfasts.php';
include_once 'controller/controllerHome.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>1234Gourmandise</title>
        <link href="assets/style.css" rel="stylesheet" type="text/css"/>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Accueil</a></li>
                        <li>
                            <form method="POST" action="index.php">    
                                <select class="button" name="breakfast" size="1">
                                    <option value="0">Petit déjeuner</option>
                                    <?php
                                    /** Affichage de la table breakfast avec les différentes infos  * */
                                    foreach ($breakfastsList as $breakfastName) {
                                        ?>
                                        <option value="<?= $breakfastName->id ?>"><?= $breakfastName->name ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <button class="button" type="submit" name="valid">Valider</button>
                            </form>
                        </li>
                        <li>
                            <form method="POST" action="index.php">    
                                <select class="button" name="breakfast" size="1">
                                    <option value="0">Boulangerie-Pâtisserie</option>
                                    <?php
                                    /** Affichage de la table breadAndPastry avec les différentes infos  * */
                                    foreach ($breadAndPastryList as $breadAndPastryName) {
                                        ?>
                                        <option value="<?= $breadAndPastryName->id ?>"><?= $breadAndPastryName->name ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <button class="button" type="submit" name="valid">Valider</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <table class="table-striped table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Adresse</th>
                    <th>Code postal</th>
                    <th>Numéro de téléphone</th>
                    <th>Type de service</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // On parcourt le tableau d'objet contenant tous les utilisateurs
                foreach ($foodsList as $food) {
                    ?>
                    <tr>
                        <td><?= $food->lastName ?></td>
                        <td><?= $food->firstName ?></td>
                        <td><?= $food->birthDate ?></td>
                        <td><?= $food->address ?></td>
                        <td><?= $food->zipCode ?></td>
                        <td><?= $food->phoneNumber ?></td>
                        <td><?= $food->breakfastName ?></td>
                        <td>
                            <form method="POST" action="index.php">
                                <button class="btn btn-danger" type="submit" name="delete[<?= $food->id ?>]">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
