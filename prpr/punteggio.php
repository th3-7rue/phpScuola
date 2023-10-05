<?php
session_start();
$risposta = $_GET["risposta"];
$domanda = $_GET["domanda"];
$punteggio = $_SESSION["punteggio"];
$risposte = array(
    1 => 3,
    2 => 2,
    3 => 1,
    4 => 4,
    5 => 2
);

if ($risposta == $risposte[$domanda]) {
    $punteggio++;
}
$_SESSION["punteggio"] = $punteggio;
if ($domanda == 5) {
    header("Location: risultato.php?punteggio=$punteggio");
} else {
    header("Location: q" . ($domanda + 1) . ".php");
}
