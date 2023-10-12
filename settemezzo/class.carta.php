<?php
class Carta
{
    private $seme;
    private $numero;
    private $immagine;
    public function __construct($seme, $numero)
    {
        $this->seme = $seme;
        $this->numero = $numero;
        $this->immagine = "image" . $this->seme . "x" . $this->numero . ".png";
    }
    public function getCarta()
    {
        // ritorna seme e numero
        return array("seme" => $this->seme, "carta" => $this->numero);
    }
    function getImage($carta)
    {
        // nome deve essere "image1x1.png"
        $nome = "image" . $carta["seme"] . "x" . $carta["carta"] . ".png";
        return $nome;
    }
}
