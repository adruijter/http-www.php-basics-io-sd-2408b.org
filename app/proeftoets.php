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
    
</body>
</html>