<?php
class Carta
{
    private $seme;
    private $numero;
    private $immagine;

    public $semi = ["denari", "coppe", "spade", "bastoni"];
    public $numeri = ["asso", "due", "tre", "quattro", "cinque", "sei", "sette", "fante", "cavallo", "re"];


    public function __construct($seme, $numero)
    {
        $this->seme = $seme;
        $this->numero = $numero;

        // Corrected image file generation
        $semeIndex = array_search($seme, $this->semi);
        $numeroIndex = array_search($numero, $this->numeri);

        if ($semeIndex !== false && $numeroIndex !== false) {
            $this->immagine = "image" . ($numeroIndex + 1) . "x" . ($semeIndex + 1) . ".png";
        } else {
            // Handle an error condition if the suit or number is not found
            $this->immagine = "error.png";
        }
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getSeme()
    {
        return $this->seme;
    }

    function getImage()
    {
        return $this->immagine;
    }
}
