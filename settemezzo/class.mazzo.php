<?php
class Mazzo
{


    private $mazzo = array(
        "seme" => array("denari" => 2, "coppe" => 3, "spade" => 1, "bastoni" => 4),
        "carte" => array(
            "asso" => 1,
            "due" => 2,
            "tre" => 3,
            "quattro" => 4,
            "cinque" => 5,
            "sei" => 6,
            "sette" => 7,
            "fante" => 11,
            "cavallo" => 12,
            "re" => 13
        )
    );

    
    function mischia()
    {
        foreach ($this->mazzo as $seme => $carte) {
            shuffle($this->mazzo[$seme]);
        }
    }
    public function __construct()
    {
        // crea un array di oggeti carta
        foreach ($this->mazzo as $seme => $carte) {
            foreach ($carte as $carta => $numero) {
                $this->mazzo[$seme][$carta] = new Carta($seme, $carta);
            }
        }
        // mischia il mazzo
        $this->mischia();
    }
    function pesca()
    {
        // pesca una carta dal mazzo
        $seme = array_rand($this->mazzo);
        $carta = array_rand($this->mazzo[$seme]);
        $carta = $this->mazzo[$seme][$carta];
        // rimuovi la carta dal mazzo
        unset($this->mazzo[$seme][$carta->getCarta()]);
        // restituisci la carta
        return $carta;
    }
}
