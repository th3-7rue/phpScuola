<?php
class Carta
{
    private $numero, $seme;
    function __construct($numero, $seme)
    {
        $this->numero = $numero;
        $this->seme = $seme;
    }
    function getNumero()
    {
        return $this->numero;
    }
    function getSeme()
    {
        return $this->seme;
    }
}
