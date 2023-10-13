<?php
class Mazzo
{
    private $deck = array();  // Use a simple indexed array for the deck.

    public function __construct()
    {
        $semi = ["denari", "coppe", "spade", "bastoni"];
        $numeri = ["asso", "due", "tre", "quattro", "cinque", "sei", "sette", "fante", "cavallo", "re"];

        // Create the deck of cards
        foreach ($semi as $seme) {
            foreach ($numeri as $numero) {
                $carta = new Carta($seme, $numero);
                $this->deck[] = $carta;
            }
        }

        // Shuffle the deck
        $this->mischia();
    }

    public function mischia()
    {
        shuffle($this->deck);
    }

    public function pesca()
    {
        // Draw a card from the top of the deck
        return array_pop($this->deck);
    }
}
