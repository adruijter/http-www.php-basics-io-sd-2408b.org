<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>PHP Basics</title>
</head>
<body>
    <h1>Lesweek 1</h1>
    <!-- Dit is commentaar tussen de HTML tags -->

    <?php
        // Hieronder staan 3 variabelen met persoonsgegevens
        $voornaam = "Arjan";
        $leeftijd = 56;
        $woonplaats = "Alkmaar";  // Dit is mijn woonplaats
        $schoenmaat = 46.5;
        $hobby = "Wandelen";

        # De div is voor de opmaak van de onderstaande persoonsgegevens
        echo "<div>";

        /* Dit is wat commentaar
           over meerdere regels */
        echo "<p>Mijn naam is $voornaam</p>";
        echo "<p>Mijn leeftijd is $leeftijd</p>";
        echo "<p>Ik woon in $woonplaats</p>";
        echo "<p>Mijn schoenmaat is $schoenmaat</p>";
        echo "<p>Mijn favo hobby is $hobby</p>";

        /** 
         * Dit is een docblock. Dit wordt veel gebruikt voor het
         * automatisch maken van documentatie
         */
        echo "</div>";

        

        /**
         * Maak twee extra persoonsgegevens erbij bijv: schoenmaat en favo hobby
         */
    ?>



    <a href="../index.php">home</a>
</body>
</html>

