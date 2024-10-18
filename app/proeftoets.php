<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Proeftoets 2408*</title>
</head>
<body>
    <h3>Proeftoets</h3>

    <h5>Vraag 2</h5>
    <?php
        $noot = array(
            'Cashewnoten',
            'Paranoten',
            'Hazelnoten',
            'Amandelen',
            'Walnoten'
        );

        echo '<ol>';
        foreach ($noot as $nootje) {
            echo "<li>$nootje</li>";
        }
        echo '</ol>';

        echo "<hr>";
        $index = 1;
        foreach ($noot as $nootje) {
            echo "$index. $nootje<br>";
            $index++;
        }

        echo "<hr>";

        foreach ($noot as $index => $nootje) {
            echo ($index + 1) . ". $nootje<br>";
        }
    ?>

    <h5>Vraag 3</h5>

    <?php

    $auto =  array(
        'Mercedes' => 120000,
        'Kia' => 12000,
        'BMW' => 230000,
        'Audi' => 88000
    );

    $totalPrice = 0;
    foreach ($auto as $car => $price) {
        echo "<p>De $car kost $price</p>";
        $totalPrice += $price;
    }
    echo "<p>Het totaalbedrag voor het wagenpark is: $totalPrice &euro;</p>";
    ?>

    <h5>Vraag 4</h5>

    <?php

    function rekenen($getal1, $getal2, $bewerking) {

        if ($getal1 >= 0 && $getal2 > 0 && is_int($getal1) && is_int($getal2)) {
            switch ($bewerking) {
                case '+':
                    $som  = $getal1 + $getal2;
                    return "<p>De som van $getal1 + $getal2 = $som</p>";
                    break;
                case 'x':
                    $product = $getal1 * $getal2;
                    return "<p>Het product van $getal1 x $getal2 = $product</p>";
                    break;
                case ':':
                    $quotient = $getal1 /$getal2;
                    return "<p>Het quotient van $getal1 : $getal2 = $quotient</p>";
                    break;
                case 'macht':
                    $macht = $getal1 ** $getal2;
                    return "<p>$getal1 tot de macht $getal2 = $macht</p>";
                    break;
                default:
                    return "<p>De opgegeven bewerking is niet bekent</p>";
            }
        } else {
            return "<p>Error! Geef gehele getallen op groter dan 0.</p>";
        }       
    }

    echo rekenen(3, 5, "+");
    echo rekenen(3, 5, "x");
    echo rekenen(10, 5, ":");
    echo rekenen(10, 2, "macht");
    echo rekenen(10, 2, "slkjdfslkjdf");
    echo rekenen(-2, 2, "+");
    echo rekenen(10.5, 2, "x");
    ?>

    <h5>Vraag 5</h5>

    <?php

    function tafelVan($getal, $startGetal = 1, $eindGetal = 10)
    {
        if ($startGetal < $eindGetal ) {
            $index = $startGetal;
            while($index <= $eindGetal) {
                $product = $index * $getal;
                echo "<p>$index x $getal = $product</p>";
                $index++;
            }
        } else {
            echo "<p>Uw startgetal is groter of gelijk aan het eindgetal, graag veranderen.</p>";
        }
    }

    tafelVan(8, 5, 15);
    tafelVan(1, 1, 5);
    tafelVan(2, 2, 6);
    tafelVan(8, 15, 5);
    tafelVan(5);
    ?>

    <h5>Vraag 6</h5>

    <?php
     function asciiArt() 
     {
         for ($i = 0; $i < 9; $i++) {
             if ($i < 4) {
                 echo str_repeat("&nbsp;", $i) . "x" . str_repeat("&nbsp;", 7 - 2 * $i) . "x<br>";
             }
             if ($i == 5) {
                 echo str_repeat("&nbsp;", $i - 1) . "x<br>";
             }
             if ($i > 5) {
                 echo str_repeat("&nbsp;", 9 - $i) . "x" . str_repeat("&nbsp;", 2 * $i - 11) . "x<br>";
             }
         }
     }

     asciiArt();

    ?>

    <h5>Vraag 7</h5>

    <?php

    function rechthoek($lengte, $breedte)
    {
        if ($lengte < $breedte) {
            return "<p>De lengte is kleiner dan de breedte, probeer opnieuw</p>";
        } elseif (!is_int($lengte) || !is_int($breedte)) {
            return "<p>De lengte of breedte of beiden zijn geen gehele getallen, probeer opnieuw</p>";
        } elseif ($lengte < 0 || $breedte < 0) {
            return "<p>De lengte of breedte of beiden zijn kleiner dan 0, probeer opnieuw</p>";
        } else {
            $oppervlakte = $lengte * $breedte;
            return "<p>De oppervlakte van de rechthoek van $lengte bij $breedte is: $oppervlakte</p>";
        }
    }

    echo rechthoek(10, 5);
    echo rechthoek(-4, -7);
    echo rechthoek(8, -5);
    echo rechthoek(8.5, 5);
    echo rechthoek(6, 5.1);
    echo rechthoek(4, 5);

    ?>
    
</body>
</html>