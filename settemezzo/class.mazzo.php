<?php
class Mazzo
{


    private $mazzo = array(
        "seme" => array("denari", "coppe", "spade", "bastoni"),
        "carte" => array(
            "asso" => 1,
            "due" => 2,
            "tre" => 3,
            "quattro" => 4,
            "cinque" => 0,
            "sei" => 0,
            "sette" => 0,
            "fante" => 2,
            "cavallo" => 3,
            "re" => 4
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
        $this->mischia();
    }
}
