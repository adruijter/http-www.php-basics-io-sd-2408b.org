<?php require_once 'classes/Persoon.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>PHP Basics</title>
</head>
<body>
    <h3>Objecten en Klassen met PHP</h3>

    <?php

        $voornaam = "Arjan";
        $achternaam = "de Ruijter";
        echo "<p>Mijn naam is $voornaam $achternaam</p>";        

        // Object van de klasse Persoon
        $persoon1 = new Persoon();

        // Zet de waarde van de variabele op het scherm
        echo '<p>Mijn naam is ' . $persoon1->voornaam . ' ' . $persoon1->achternaam . '</p>';
        
        // Kun je met dubbele quotes de objectwaarden direct weergeven (Ja dat kan) 
        echo "<p>Mijn naam is $persoon1->voornaam $persoon1->achternaam</p>";

        // Klassenvariabelen kun je een nieuwe naam geven
        $persoon1->voornaam = 'Bert';
        $persoon1->achternaam = 'de Vries';
        

        echo "<p>Mijn nieuwe naam is tijdelijk $persoon1->voornaam $persoon1->achternaam</p>";

        // We kunnen nu het object een nieuwe voornaam meegeven
        $persoon2 = new Persoon('Frans');

        echo "<p>Mijn naam is: $persoon2->voornaam $persoon2->achternaam</p>";

        // We kunnen nu het object een nieuwe voornaam meegeven
        $persoon3 = new Persoon();

        echo "<p>Mijn naam is: $persoon3->voornaam $persoon3->achternaam</p>";

        // We kunnen nu het object een nieuwe voornaam meegeven
        $persoon4 = new Persoon('Harry', 'van Bemmelen');

        echo "<p>Mijn naam is: $persoon4->voornaam $persoon4->achternaam</p>";

        $persoon5 = new Persoon('Sandra', 'de Beer');
        echo $persoon5->volledigeNaam();
        
        /**
         * Voeg aan de class Persoon ook de geboortedatum, adres + huisnummer, woonplaats toe
         * zodat je als output krijgt.
         * 
         * $persoon6 = new Persoon('Arjan', 'de Ruijter', '12-05-1980', 'Zijllaan', 17, 'Amsterdam');
         * $persoon6->nawGegevens();
         * Output:
         * Mijn naam is Arjan de Ruijter
         * Ik woon op de Zijllaan 17 te Amsterdam
         */


    ?>

</body>
</html>