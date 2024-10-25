<?php

/**
 * Deze class kan persoongegevens bevatten en bewerken
 */

class Persoon
{
    public $voornaam;
    public $achternaam;

   /**
    * De constructor wordt aangeroepen als je een nieuw
    * object van de klasse
    */
    public function __construct($voornaam = 'Arjan', $achternaam = 'de Ruijter')
    {
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
    }

    public function volledigeNaam()
    {
        return "<p>Mijn naam is : $this->voornaam $this->achternaam</p>";
    }

}

