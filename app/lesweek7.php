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
    <h3>Objecten en Klassen met PHP</h3>

    <?php
        $voornaam = "Arjan";
        $achternaam = "de Ruijter";
        echo "<p>Mijn naam is $voornaam $achternaam</p>";


        class Persoon
        {
            public $voornaam;
            public $achternaam = 'de Ruijter';

           /**
            * De constructor wordt aangeroepen als je een nieuw
            * object van de klasse
            */
            public function __construct($voornaam = 'Arjan', )
            {
                $this->voornaam = $voornaam;
            }
  
        }

        // Object van de klasse Persoon
        $persoon1 = new Persoon();

        // Zet de waarde van de variabele op het scherm
        echo '<p>Mijn naam is ' . $persoon1->voornaam . ' ' . $persoon1->achternaam . '</p>';
        
        // Kun je met dubbele quotes de objectwaarden direct weergeven (Ja dat kan) 
        echo "<p>Mijn naam is $persoon1->voornaam $persoon1->achternaam</p>";

        // Klassenvariabelen kun je een nieuwe naam geven
        $persoon1->voornaam = 'Bert';
        $persoon1->achternaam = 'de Vries';
        

        echo "<p>Mijn nieuwe naam is tijdelijk $persoon1->voornaam $persoon1->achternaam</p>";

        // We kunnen nu het object een nieuwe voornaam meegeven
        $persoon2 = new Persoon('Frans');

        echo "<p>Mijn naam is: $persoon2->voornaam</p>";
        

    ?>

</body>
</html>