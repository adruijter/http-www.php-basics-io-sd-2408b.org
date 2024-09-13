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
        echo "<div id='div-1'>";

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
        $voornaam = "Johan";
        $leeftijd = 18;
        $woonplaats = "Den Haag";  // Dit is mijn woonplaats
        $schoenmaat = 42;
        $hobby = "Zwemmen";

        # De div is voor de opmaak van de onderstaande persoonsgegevens
        echo "<div id='div-2'>";

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

        $voornaam = "Harry";
        $leeftijd = 94;
        $woonplaats = "Utrecht";  // Dit is mijn woonplaats
        $schoenmaat = 36;
        $hobby = "Fietsen";

        $voornaam1 = "Leo";
        $leeftijd1 = 6;
        $woonplaats1 = "Maastricht";  // Dit is mijn woonplaats
        $schoenmaat1 = 6;
        $hobby1 = "Slapen";
        
    ?>
    <div class="test">
        <p>Mijn naam is <?php echo $voornaam; ?></p>
        <p>Mijn leeftijd is <?php echo $leeftijd; ?></p>
        <p>Ik woon in <?php echo $woonplaats; ?></p>
        <p>Mijn schoenmaat is <?php echo $schoenmaat; ?></p>
        <p>Mijn favo hobby is <?php echo $hobby; ?></p>
    </div>

    <div class="test">
        <p>Mijn naam is <?php echo $voornaam1; ?></p>
        <p>Mijn leeftijd is <?php echo $leeftijd1; ?></p>
        <p>Ik woon in <?php echo $woonplaats1; ?></p>
        <p>Mijn schoenmaat is <?php echo $schoenmaat1; ?></p>
        <p>Mijn favo hobby is <?php echo $hobby1; ?></p>
    </div>


    <a href="../index.php">home</a>
</body>
</html>

