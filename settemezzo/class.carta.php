<?php
class Carta
{
    private $numero, $seme;
    function __construct($numero, $seme)
    {
        $this->numero = $numero;
        $this->seme = $seme;
    }
    private $carte = array(
        "denari" => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
        "coppe" => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
        "spade" => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
        "bastoni" => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)
    );
    function getCarta()
    {
        return $this->carte[$this->seme][$this->numero];
    }
}
