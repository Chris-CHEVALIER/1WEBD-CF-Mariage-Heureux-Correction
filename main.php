<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mariage heureux - Correction</title>
</head>

<body>
    <?php
    /* require "./Person.php";
    require "./Woman.php";
    require "./Man.php";

    /* function loadClasses($className): void {
        require "$className.php";
    }
    spl_autoload_register("loadClasses"); */

    spl_autoload_register(function ($className): void {
        require "$className.php";
    });

    /* $thomas = new Person("Chris", "Chevalier", 31);
    $thomas->display();
    $thomas->setFirstName("Thomas")->setLastName("Tayllamin")->setAge(17);
    $thomas->display(); */


    $meghan = new Woman("Meghan", "Merkle", 30);
    $harry = new Man("Harry", "De Sussex", 35);

    $meghan->display();
    $harry->display();

    $harry->getMarried($harry);

    $meghan->display();
    $harry->display();

    ?>
</body>

</html>