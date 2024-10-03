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
    <h3>Controlestructuren met PHP</h3>

    <?php

    /**
     * Met een if-else controlestructuur kun je keuzes maken in je 
     * programma
     */

    $waarOfNietWaar = false;

    if ($waarOfNietWaar) {
        echo "<p>Deze bewering is waar</p>";
    } else {
        echo "<p>Deze bewering is niet waar</p>";
    }

    /**
     * Gebruik een if-else controlestructuur om de volgende teksten op het scherm te zetten
     * $mooiWeerOfNiet = "Mooi weer" geeft de 
     * output:
     * Het is mooi weer vandaag
     * 
     * $mooiWeerOfNiet = "Slecht weer" geeft de 
     * output:
     * Het is bar en boos weer vandaag
     */

    $mooiWeerOfNiet = "Mooi weer";

    if ($mooiWeerOfNiet == 'Mooi weer') {
        echo "<p>Het is mooi weer vandaag</p>";
    } elseif ($mooiWeerOfNiet == "Slecht weer") {
        echo "<p>Het is bar en boos weer vandaag</p>";
    } elseif ($mooiWeerOfNiet == 'Koud weer') {
        echo "<p>Het is koud weer vandaag</p>";
    } else {
        echo "<p>Het weer is onbekend vandaag</p>";
    }

    /**
     * Maak 3 array's genaamd IO-SD-2408A, IO-SD-2408B en IO-SD-2408C
     * Voeg aan ieder array drie namen toe
     * Maak een functie die checked in welke klas een student zit
     * de functie neemt een voornaam als argument (verplicht) en die als
     * output geeft:
     * Arjan zit in klas IO-SD-2408A  
     * De array-definities zitten in het codeblock van de functie
     * gebruik een if-elseif-else controlestructuur in de functie
     */
    
    function klasZoeker($naam) 
    {
        $io_sd_2408a = array('Arjan', 'Bert', 'Frank');
        $io_sd_2408b = array('Francien', 'Leo', 'Henk');
        $io_sd_2408c = array('Frans', 'Terence', 'Fred');

        if (in_array($naam, $io_sd_2408a)) {
            return "<p>$naam zit in klas IO-SD-2408A</p>";
        } elseif (in_array($naam, $io_sd_2408b)) {
            return "<p>$naam zit in klas IO-SD-2408B</p>";
        } elseif (in_array($naam, $io_sd_2408c)) {
            return "<p>$naam zit in klas IO-SD-2408C</p>";
        } else {
            return "<p>$naam zit niet in klas IO-SD-2408A,B of C</p>";
        }
     }

     echo klaszoeker('Arjan'); // output: Arjan zit in klas IO-SD-2408A
     echo klaszoeker('Francien'); // output: Bert zit in klas IO-SD-2408A
     echo klaszoeker('Terence'); // output: Bert zit in klas IO-SD-2408A
     echo klaszoeker('Leontien'); // output: Bert zit in klas IO-SD-2408A


     /**
      * Maak een functie die checked of een getal kleiner, gelijk aan of groter
      * is dan het getal 10
      * 
      * getal10Checker(42) // geeft als output: Het getal 42 is groter dan 10
      * getal10Checker(3) // geeft als output: Het getal 3 is kleiner dan 10
      * getal10Checker(10) // geeft als output: Het getal 10 is gelijk aan 10
      */

      function getal10Checker($getal)
      {
        if (is_numeric($getal)) {
            if ($getal == 10) {
                return "<p>Het getal $getal is gelijk aan 10</p>";
            } elseif ($getal < 10) {
                return "<p>Het getal $getal is kleiner dan 10</p>";
            } elseif ($getal > 10) {
                return "<p>Het getal $getal is groter dan 10</p>";
            } else {
                return "Er is iets mis gegaan";
            }

        } else {
            return "De meegegeven waarde is geen getal";
        }

      }

      echo getal10Checker(10);
      echo getal10Checker(42);
      echo getal10Checker(3);
      echo getal10Checker('Leo');


      /**
       * Hieronder een voorbeel van de controlestructuur switch-case
       */

      $deelVanDeDag = 'middag';

      switch ($deelVanDeDag) {
        case 'ochtend':
            echo "<p>Goedemorgen, het is ochtend</p>";
            break;
        case 'middag':
            echo "<p>Goedemiddag, het is middag</p>";
            break;
      }

    ?>
</body>
</html>