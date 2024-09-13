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
        echo "Over 3 jaar verwachten we een verdrievoudiging van het aantal studenten naar $totaalAantalStudenten";


    ?>

</body>
</html>