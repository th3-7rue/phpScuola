<?php
class Domanda
{
    private $testo, $opzioni, $risposta;
    public function __construct($testo, $opzioni, $risposta)
    {
        $this->testo = $testo;
        $this->opzioni = $opzioni;
        $this->risposta = $risposta;
    }
    public function getTesto()
    {
        return $this->testo;
    }
    public function getOpzioni()
    {
        return $this->opzioni;
    }
    public function getRisposta()
    {
        return $this->risposta;
    }
}
