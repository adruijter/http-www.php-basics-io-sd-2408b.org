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
    <h3>Functies met PHP</h3>

    <?php
    /**
     * Binnen de programmeerwereld geldt een keiharde principe
     * en dit principe heet het DRY-principe
     * 
     * Don't repeat yourself
     */

    $getal1 = 42;
    $getal2 = 24;
    $som = $getal1 + $getal2;
    echo "<p>De som van $getal1 + $getal2 =  $som</p>";

    $getal1 = 82;
    $getal2 = 18;
    $som = $getal1 + $getal2;
    echo "<p>De som van $getal1 + $getal2 =  $som</p>";

    $getal1 = 12;
    $getal2 = 23;
    $som = $getal1 + $getal2;
    echo "<p>De som van $getal1 + $getal2 =  $som</p>";

    /**
     * Hoe maak je functie????
     */
    function noemJeNaam(
        $voornaam = NULL, 
        $tussenvoegsel = NULL, 
        $achternaam = NULL
    )
    {
        echo "<p>Mijn naam is $voornaam $tussenvoegsel $achternaam.</p>";
    }

    noemJeNaam('Bertje', 'de', 'Vries');
    noemJeNaam('Johan', 'Brink');
    
    /**
     * Maak een functie die twee getallen bij elkaar kan optellen en als
     * output heeft:
     * 
     * berekenSom(3, 5);
     * 
     * De som van 3 en 5 = 8
     * 
     * Roep de functie 3 maal aan met de waarden (3, 5), (9, 7) en (4, 2)
     */

    function berekenSom($getal1, $getal2)
    {
        $som = $getal1 + $getal2;
        return "<p>De som van $getal1 + $getal2 = $som</p>";
    }

    echo berekenSom(3, 5);
    echo berekenSom(3, 5);
    echo berekenSom(9, 7);
    echo berekenSom(4, 2);

    $getallenParen = array(
        3 => 5,
        5 => 6,
        123 => 7,
        4 => 5,
        7 => 45,
        42 => 4,
        54 => 12,
        100 => 200,
        23 => 45,
        12 => 13
    );

    /**
     * Maak een foreach-loop voor dit associatief array en gebruik
     * de functie berekenSom() die je net hebt gemaakt, in de foreach-loop om
     * steeds de som te berekenen van elk sleutel - waarde paar.
     */

    foreach ($getallenParen as $getal1 => $getal2) {
        echo berekenSom($getal1, $getal2);
    }

    /**
     * Maak een functie die de tafel van 3 afbeeld op het scherm van 1 t/m 10
     * Maak hiervoor een indexed-array die de getallen 1 t/m 10 als data heeft
     * Gebruik een foreach-loop
     * 
     * tafel(3);
     * 
     * output:
     * 1 x 3 = 3
     * 2 x 3 = 6
     * enz... 
     * 10 x 3 = 30
     */

    $getallen = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    foreach ($getallen as $getal) {
        echo "<p>$getal x ... = ...</p>";
    }

    ?>
    
    
</body>
