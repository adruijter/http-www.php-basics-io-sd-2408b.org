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
    <h3>Operatoren met PHP</h3>

    <h5>Assignment Operatoren (toewijzings operator)</h5>
    <?php
        $teller = 30;
        echo "<p>$teller</p>";
    ?>

    <h5>Arithmic assignment operator</h5>

    <?php
        $teller += 30;
        echo "<p>$teller</p>"; // Output: 60

        $teller -= 20;
        echo "<p>$teller</p>"; // Output: 40

        $teller *= 3;
        echo "<p>$teller</p>"; // Output: 120

        $teller /= 2;
        echo "<p>$teller</p>"; // Output: 60

        $teller **= 2;
        echo "<p>$teller</p>"; // Output: 3600

        $teller .= " euro";
        // $teller = $teller . " euro";
        echo "<p>$teller</p>"; // Output: 40

        $teller = 12;
        $teller %= 3;
        echo "<p>$teller</p>"; // Output: 0
    ?>

    <h5>Increment (++) en de decrement (--)</h5>

    <?php
        $number = 100;
        $number++;
        echo "<p>$number</p>";

        $number = 200;
        $number--;
        echo "<p>$number</p>";
    ?>

    <h5>Comparison operator (vergelijkings operator)</h5>
    <?php
        /**
         * is gelijk aan: ==
         * is niet gelijk aan: != 
         * groter gelijk aan: >=
         * kleiner gelijk aan: <=
         * groter dan: >
         * kleiner dan: <
         */

        $getal = 3;
        if ($getal == 5) {
            echo "<p>Het getal is gelijk aan 5</p>";
        }

        if ($getal != 5) {
            echo "<p>Het getal is niet gelijk aan 5</p>";
        }

        if ($getal > 3) {
            echo "<p>Het getal is groter dan 3</p>";
        }

        if ($getal >= 3) {
            echo "<p>Het getal is groter of gelijk aan 3</p>";
        }

        if ($getal < 3) {
            echo "<p>Het getal is kleiner dan 3/p>";
        }

        if ($getal <= 3) {
            echo "<p>Het getal is kleiner of gelijk aan 3</p>";
        }
    ?>

    <h5>De AND (&&) operator (Beide beweringen moeten waar zijn)</h5>

    <?php
        $getal = 10;

        if ($getal > 5 && $getal < 15 ) {
            echo "<p>Het getal: $getal is groter dan 5 en kleiner dan 15</p>";
        } 
    ?>

    <h5>De OR (||) operator (Een van de beweringen moet waar zijn)</h5>

    <?php
        $inkomen = 1559;
        $geslacht = 'man';


        if ($inkomen > 1500 || $geslacht == 'man' ) {
            echo "<p>U bent of een man of u verdient meer dan 1500 euro</p>";
        } 
    ?>

    Maak een functie die berekent wat voor kilometervergoeding je krijgt voor het aantal gereden kilometers
    De functie heet kilometerVergoeding($aantalKilometers).
    Voor de eerste 10 km krijg je 0.30 euro per km.
    Tussen de 10 en 20 km krijg je 0.50 euro per km.
    De functie geeft het totaalbedrag terug.
    Output: U krijgt voor de 50 km het bedrag van 38 euro




    

</body>
</html>