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
    Boven de 20 km krijg je 1 euro per km.
    De functie geeft het totaalbedrag terug.
    echo kilometerVergoeding(50);
    Output: U krijgt voor de 50 km het bedrag van 38 euro

    <?php
    function kilometerVergoeding($aantalKilometers)
    {      
        $vergoeding = 0;

        if ($aantalKilometers <= 10) {
            $vergoeding += $aantalKilometers * 0.3;
        } elseif ($aantalKilometers > 10 && $aantalKilometers <= 20) {
            $vergoeding += 3 + ($aantalKilometers - 10) * 0.5;
        } else {
            $vergoeding += 3 + 5 + ($aantalKilometers - 20) * 1;
        }

        return "<p>U krijgt voor de $aantalKilometers km het bedrag van $vergoeding euro</p>";
    }

    echo kilometerVergoeding(5);
    echo kilometerVergoeding(15);
    echo kilometerVergoeding(25);
    echo kilometerVergoeding(50);

    ?>

    Maak een functie somVanArray($getallen) die een array meekrijgt 
    de functie berekent dan de som van alle waarden in het array
    en geeft aan of deze som een even of oneven getal is
    Voorbeeld:
    $getallen = array(12, 23, 4, 6, 54);
    echo somVanArray($getallen);
    Output: De som van alle waarden is 99. Dit is een oneven getal

    
    <?php
        $getallen = array(12, 23, 4, 6, 54);
        $getallen_1 = array(11, 23, 4, 6, 54);
        $getallen_2 = array(10, 23, 4, 6, 54);
        $getallen_3 = array(9, 23, 4, 6, 54);

        function somVanArray($getallen) 
        {
            $som = 0;
            foreach ($getallen as $getal) {
                $som += $getal;
            }

            $evenOfOneven;
            if ($som % 2) {
                $evenOfOneven = 'oneven';
            } else {
                $evenOfOneven = 'even';
            }

            return "<p>De som van alle waarden is: $som. Dit is een $evenOfOneven getal</p>";

        }

        echo somVanArray($getallen);
        echo somVanArray($getallen_1);
        echo somVanArray($getallen_2);
        echo somVanArray($getallen_3);
        

    ?>

    

</body>
</html>