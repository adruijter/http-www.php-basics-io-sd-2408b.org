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
     * Pas de functie tafel aan zodat je zelf kunt aangeven vanaf welke waarde
     * de tafel start en stopt en met welke stap grootte
     * 
     * tafel(5, 10, 13, 1)
     * 
     * output:
     * 10 x 5 = 50
     * 11 x 5 = 55
     * 12 x 5 = 60
     * 13 x 5 = 65
     * 
     * Laat je browser crashen door zeer hoge waarde mee te geven
     */

    function tafel($getal, $start = 1, $eind = 10, $stap = 1)
    {
        echo "<h3>De tafel van $getal</h3>";
        echo "***************";
        /**
         * Dit is het array waarmee de foreach-loop het array doorloopt
         */
        $getallen = range($start, $eind, $stap);
        
        /**
         * Doorloop het array en bereken steeds voor ieder array-waarde het product
         * echo dit op het scherm
         */
        foreach ($getallen as $index) {
            $product = $index * $getal;
            echo "<p>$index x $getal = $product</p>";
        }
    }

    tafel(10, 5, 15, 2);
    tafel(8, 5, 15, 2);
    tafel(3);
    // tafel(734, 1, 10000000, 1);


    $fruitItem = 'banaan';

    $fruit = ['appel', 'banaan', 'citroen'];

    // echo in_array($fruitItem, $fruit);

    if ( in_array($fruitItem, $fruit)) {
        echo "<p>$fruitItem zit in het array</p>";
    } else {
        echo "<p>$fruitItem zit niet in het array</p>";
    }

     /**
       * Maak een functie die controleert of een automerk in een array zit
       * De functie krijgt een array mee en een automerk en als het automerk
       * in het array zit krijg je de melding "De auto is aanwezig". Wanneer 
       * het automerk niet in het array zit krijg je de melding "De auto is niet aanwezig"
       * 
       * $autos = ['Mercedes', 'Audi']
       * 
       * Gebruik het voorbeeld van W3schools.com: 
       * https://www.w3schools.com/php/func_array_in_array.asp
       * 
       * merkAutoAanwezig($autos, 'Volkswagen');
       * 
       * Output:
       * De auto is niet aanwezig.
       */

       $autos = array(
            'Volkswagen',
            'Audi',
            'Mercedes',
            'Tesla',
            'Opel',
            'Peugeot',
            'Alfa Romeo',
            'BMW',
            'Austin Martin',
            'Ferarri',
            'Bentley'
       );

       function merkAutoAanwezig($autoArray, $automerk) 
       {
            if (in_array($automerk, $autoArray)){
                return "<p>$automerk zit in het array</p>";
            } else {
                return "<p>$automerk zit niet in het array</p>";
            }
       }

       echo merkAutoAanwezig($autos, 'Mercedes');
       echo merkAutoAanwezig($autos, 'Lada');
    
    ?>
    
    
</body>
