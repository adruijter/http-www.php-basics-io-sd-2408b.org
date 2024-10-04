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

    $mooiWeerOfNiet = "Slecht weer";

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
       * Opdracht: Maak de switch-case af voor de waarden 'avond' en 'nacht'
       */

      $deelVanDeDag = 'banaan';

      switch ($deelVanDeDag) {
        case 'ochtend':
            echo "<p>Goedemorgen, het is ochtend</p>";
            break;
        case 'middag':
            echo "<p>Goedemiddag, het is middag</p>";
            break;
        case 'avond':
            echo "<p>Goedenavond, het is avond</p>";
            break;
        case 'nacht':
            echo "<p>Goedennacht, het is nacht</p>";
            break;
        default:
            echo "<p>Het dagdeel is onbekend</p>";            
      }

      /**
       * Maak een functie diplomaChecker() met daarin 
       * een switch case controle structuur die aangeeft welke
       * opleiding je hebt gehaald. De keuze is:
       * VMBO gemengd, kader, basis, TL, HAVO, VWO
       * Als de keuze er niet bijzit dan een melding:
       * Uw diploma is niet bekent 
       * 
       * 
       * Voorbeelden:
       * $education = "basisschool";
       * Output
       * Uw diploma is niet bekend
       * 
       * $education = "VMBO TL";
       * Output:
       * Ik heb mijn VMBO TL diploma gehaald
       */
    //    $education = "";

       if (isset($_POST['submit'])) {
        $education = $_POST['school'];
       } else {
        $education = '';
       }

       switch ($education) {
            case 'VMBO TL':
                echo "<p>Ik heb mijn VMBO TL diploma gehaald</p>";
                break;
            case 'VMBO Kader':
                echo "<p>Ik heb mijn VMBO Kader diploma gehaald</p>";
                break;
            case 'VMBO Gemengd':
                echo "<p>Ik heb mijn VMBO Gemengd diploma gehaald</p>";
                break;
            case 'VMBO Basis':
                echo "<p>Ik heb mijn VMBO Basis diploma gehaald</p>";
                break;
            case 'HAVO':
                echo "<p>Ik heb mijn HAVO diploma gehaald</p>";
                break;
            case 'VWO':
                echo "<p>Ik heb mijn VWO diploma gehaald</p>";
                break;
            default:
                echo "<p>Uw heeft geen schoolkeuze gemaakt, probeer het opnieuw</p>";
       }


       /**
        * While Loop
        */

       $number = 1;
       while ($number <= 10) {
            echo "<p>$number</p>";
            $number++;
       }

       /**
        * Maak een indexed array groenten met daarin 5 groentensoorten
        * Gebruik een while loop om de groenten onder elkaar op het scherm
        * te krijgen.
        */
       $groenten = array('Komkommer', 'Sla', 'Tomaat', 'Paprika');
       echo "Het aantal elementen in het groentenarray is: " . count($groenten);

       $index = 0;
       while ($index < count($groenten)) {
            echo "<p>$groenten[$index]</p>";
            $index++;
       }


       /**
        * Do while loop (wordt altijd minimaal 1 maal het codeblock uitgevoerd)
        */
       $number = 1;

       do {
        echo "<p>$number</p>";
        $number++;
       } while ($number < 5);


       $index = 0;

       do {
        echo "<p>$groenten[$index]</p>";
        $index++;
       } while($index < count($groenten));



       /**
        * Foreach
        */
       foreach ($groenten as $groente) {
        echo "<p>$groente</p>";
       }


       /**
        * De for-loop
        */
    
       for ($i = 0; $i < 4; $i++) {
        echo "<p>$i</p>";
       }

       $fruit = array('Appel', 'Peer', 'Druif', 'Mandarijn');

       for ($i = 0; $i < count($fruit); $i++) {
            echo "<p>$fruit[$i]</p>";
       }

       /**
        * Schrijf een functie die checked of een fruitsoort in het 
        * array zit en die deze fruitsoort teruggeeft. Als het er niet in zit
        * krijg je de melding fruitsoort onbekend.
        *
        * fruitChecker('Banaan'); //Output: Banaan
        * fruitChecker('Kiwi'); //Output: Fruitsoort Kiwi is onbekend
        *
        * Gebruik een for-loop en een if-else controlestructuur in de functie 
        * en de array functie in_array(); https://www.w3schools.com/php/func_array_in_array.asp
        */ 








    ?>


    <form action="lesweek4.php" method="post">
        <select name="school" >
            <!-- Maak meerdere option tages -->
            <option value="">Maak een schoolkeuze</option>
            <option value="VMBO TL">VMBO TL</option>
            <option value="VMBO Kader">VMBO Kader</option>
            <option value="VMBO Basis">VMBO Basis</option>
        </select>
        <input type="submit" name="submit" value="verstuur">
    </form>
</body>
</html>