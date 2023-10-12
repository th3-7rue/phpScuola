<?php
include 'app.php';
include 'class.mazzo.php';
include 'class.carta.php';
// qui l'utente gioca contro la CPU
// creo un nuovo mazzo
$mazzo = new Mazzo();
// mescolo il mazzo
$mazzo->mischia();
// dai al giocatore una carta
$carta_giocatore = $mazzo->pesca();
// mostra la carta al giocatore
echo "<img src='carte/" . $carta_giocatore->getImage($carta_giocatore->getCarta()) . "' />";
// dai al banco una carta
$carta_banco = $mazzo->pesca();
