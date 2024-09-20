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
    <h1>Lesweek 2</h1>

    <?php
        // Hieronder staat een string-variabele
        $schoolnaam = 'MBO Utrecht';
        echo "<p>Ik zit op $schoolnaam</p>";

        // Dit is een integer variabele
        $aantalStudenten = 489;
        echo "<p>Het aantal studenten op school is $aantalStudenten</p>";

        $stijgingStudenten = 200;
        echo "<p>Het nieuwe aantal studenten is " . $aantalStudenten + $stijgingStudenten . " we zijn in aantal gestegen</p>";
        
        /**
         * Hier gebruiken we een nieuwe variabele voor het weergeven van de stijging
         */
        $totaalAantalStudenten = $aantalStudenten + $stijgingStudenten;
        echo "<p>Het nieuwe aantal studenten is $totaalAantalStudenten we zijn in aantal gestegen</p>";

        $verdrievoudiging = 3;
        $totaalAantalStudenten = $totaalAantalStudenten * $verdrievoudiging;
        // $totaalAantalStudenten *= $verdrievoudiging;
        echo "<p>Over 3 jaar verwachten we een verdrievoudiging van het aantal studenten naar $totaalAantalStudenten</p>";

        $dalingAantalStudenten = 245;
        $totaalAantalStudenten = $totaalAantalStudenten - $dalingAantalStudenten;
        // $totaalAantalStudenten -= $dalingAantalStudenten;
        echo "<p>Over 5 jaar verwachten we een daling van $dalingAantalStudenten naar $totaalAantalStudenten</p>";

        $halvering = 2;
        $totaalAantalStudenten = $totaalAantalStudenten / $halvering;
        // $totaalAantalStudenten /= $halvering;
        echo "<p>Over 7 jaar verwachten we een halvering van het aantal naar $totaalAantalStudenten</p>";

        $voornaam = "Arjan";
        $achternaam = " de Ruijter";
        $volledigeNaam = $voornaam . $achternaam;
        echo "Mijn volledige naam is $volledigeNaam";

        // De Boolean variabelen kan maar twee waarden aannemen 1 of 0, true of false
        $ingeschrevenBijMBOUtrecht = true;

        if ($ingeschrevenBijMBOUtrecht ) {
          echo "<p>Je bent ingeschreven bij MBO Utrecht</p>";
        } else {
          echo "<p>Je bent niet ingeschreven bij MBO Utrecht</p>"; 
        }

        // Je kan ook 1 of 0 gebruiken
        $ikBenMiljonair = 1;

        if ( $ikBenMiljonair ) {
            echo "<p>Ik ben miljonair</p>";
        } else {
            echo "<p>Ik ben nog geen miljonair</p>";
        }

        
        if (isset($_POST['user'])) { 
            $user = $_POST['user'];
        } else {
            $user ="";
        }

        if ($user == 'Admin') {
            echo "U wordt doorgestuurd naar index!!!!";
            header("Refresh:3; url=../index.php");
        } elseif ($user == 'Root') {
            echo "<p>Je hebt root ingevoerd</p>";
        } elseif ($user == 'customer') {

        } else {
            echo "<p>U heeft niets te zoeken op deze webapp</p>";
        }

        /**
         * Hieronder staan voorbeelden van het datatype array
         */

        $snoep = "Maltezers";
        echo "<p>Een van mijn favo snoep is: $snoep</p>";

        $snoep2 = "Mars";
        echo "<p>Een van mijn favo snoep is: $snoep2</p>";

        /* Hieronder staat een array, aan de waarden is een index gekoppeld. De 
           index begint bij 0: */
        //                  0          1
        $snoep = array(
            'Maltezers', 
            'Mars', 
            'Twix', 
            'Milky Way', 
            'Nuts', 
            'Lion', 
            'Bounty',
            'Top drop'
        );

        echo count($snoep);

        echo "<p>Mijn favo snoep is: $snoep[0]</p>";
        echo "<p>Mijn favo snoep is: $snoep[1]</p>";
        echo "<p>Mijn favo snoep is: $snoep[2]</p>";
        echo "<p>Mijn favo snoep is: $snoep[3]</p>";
        echo "<p>Mijn favo snoep is: $snoep[4]</p>";
        echo "<p>Mijn favo snoep is: $snoep[5]</p>";
        echo "<p>Mijn favo snoep is: $snoep[6]</p>";
        echo "<p>Mijn favo snoep is: $snoep[7]</p>";

        echo "<p>Mijn top " . count($snoep) . " snoeplijst</p>";
        echo "============";
        echo "<ol>"; 
        foreach ($snoep as $item)  {
            echo "<li>$item</li>";
        }
        echo "</ol>";

        /**
         * Maak een array met een top 5 lijstje met daarin 5 van jou
         * favoriete games en gebruik daarvoor een foreach-loop om deze 
         * op het scherm te zetten. Voor elk spel moet een nummer staan
         * maar daar mag je geen <ol><li></li></ol> voor gebruiken. Gebruik
         * een nieuwe variabele $listnumber
         */

        $games = [
            'Tears of dread',
            'Tomb Raider',
            'Dracula',
            'First Blood',
            'Close Encounters'
        ];


        echo "<p>Mijn top " . count($games) . " favoriete games</p>";
        echo "<p>++++++++++++++++++</p>";
        $listnumber = 0;
        foreach ($games as $item) {
            // $listnumber = $listnumber + 1;
            $listnumber++;
            echo "<p>$listnumber. $item</p>";
        }

        /**
         * Maak een array met daarin je 8 favoriete sneakers. Gebruik een 
         * foreach-loop en de output moet er als volgt uitzien:
         * 
         * Mijn favoriete sneakers
         * ***********************
         * Schoen 1: Adidas
         * Schoen 2: ......
         * enz.....
         * Schoen 8: Nike
         */

         $sneakers = array(
            'Nike',
            'Adidas',
            'Vans',
            'Reebok',
            'Sketchers',
            'Le Coq Sportive',
            'Asics',
            'All Stars'
         );

         echo "<p>Mijn favoriete sneakers</p>";
         echo "<p>**********************</p>";

         $number = 0;
         foreach ($sneakers as $item) {
            $number++;
            echo "<p>Schoen $number. $item</p>";
         }


         /**
          * We gaan nu een associatief array bekijken
          */
         $persoonsgegevens = array(
            'voornaam' => 'Arjan', 
            'tussenvoegsel' => 'de',
            'achternaam' => 'Ruijter',
         );

         echo "<p>Mijn voornaam is: {$persoonsgegevens['voornaam']} {$persoonsgegevens['tussenvoegsel']} {$persoonsgegevens['achternaam']}</p>";

         // Opdracht geef je naam weer met een foreach-loop

         foreach ($persoonsgegevens as $key => $value)  {
            echo "<p>$key: $value</p>";
         }

         /**
         * Maak een associatief array met daarin je 8 favoriete sneakers inclusief prijs. Gebruik een 
         * foreach-loop en de output moet er als volgt uitzien:
         * 
         * Mijn favoriete sneakers
         * ***********************
         * Schoen 1: Adidas - 231,45 euro
         * Schoen 2: ......
         * enz.....
         * Schoen 8: Nike - 187,67 euro
         */

         $sneakers = array(
            'Nike' => '231,45',
            'Adidas' => '456,03',
            'Vans' => '4,95',
            'Reebok' => '345,98',
            'Sketchers' => '56,34',
            'Le Coq Sportive' => '1234,45',
            'Asics' => '32,34',
            'All Stars' => '199,99'
         );

         echo "<h3>Mijn favoriete sneakers</h3>";
         echo "************************<br>";

         $number = 0;
         foreach ($sneakers as $shoe => $price) {
            $number++;
            echo "<p>Schoen $number: $shoe - $price &euro;</p>";
         }

         /**
         * Maak een associatief array met daarin de top 5 snelste auto's ter wereld met
         * de topsnelheid daarin vermeld.Je mag niet sorteren in je array op snelheid van 
         * hoog naar laag maar dat moet later
         * gebeuren met een array sorteer functie. De output ziet er als volgt uit:
         * 
         * ====================================
         * Top 5 snelste sportauto's ter wereld
         * ====================================
         * 1. Bugatti Veyron => 456 km/h 
         * 2. Fiat Diablo    => 234 km/h
         * 3. ...........
         * 
         */

         $fastestCars = array(
            'Bugatti Chiron Super Sport 300+' => '490',
            'SSC Tuatara' => '475',           
            'Hennessey Venom F5' => '437',
            'Koenigsegg Jesko Absolut' => '531',
            'Rimec Nevera' => '415'
          );

        //   var_dump($fastestCars);

        //   arsort($fastestCars);
        

        //   var_dump($fastestCars);

        echo "======================<br>";
        echo "<p>Top " . count($fastestCars) . " snelste sportauto's ter wereld</p>";
        echo "======================<br>";

        $number = 1;
        foreach ($fastestCars as $carname => $speed) {
            echo "<p>$number. $carname => $speed km/u</p>";
            $number++;
        }
    
        
    ?>

    <form action="lesweek2.php" method="post">
        <input type="text" name="user">
        <input type="submit">
    </form>

</body>
</html>