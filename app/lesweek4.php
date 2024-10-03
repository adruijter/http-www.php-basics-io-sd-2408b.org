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
            echo "<p>$naam zit in klas IO-SD-2408A</p>";
        } elseif (in_array($naam, $io_sd_2408b)) {
            echo "<p>$naam zit in klas IO-SD-2408B</p>";
        } elseif (in_array($naam, $io_sd_2408c)) {
            echo "<p>$naam zit in klas IO-SD-2408C</p>";
        } else {
            echo "<p>$naam zit niet in klas IO-SD-2408A,B of C</p>";
        }
     }

     echo klaszoeker('Arjan'); // output: Arjan zit in klas IO-SD-2408A
     echo klaszoeker('Francien'); // output: Bert zit in klas IO-SD-2408A
     echo klaszoeker('Terence'); // output: Bert zit in klas IO-SD-2408A
     echo klaszoeker('Leontien'); // output: Bert zit in klas IO-SD-2408A



    ?>
</body>
</html>