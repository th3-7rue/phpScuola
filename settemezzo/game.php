<?php
include 'app.php';
include 'class.mazzo.php';
include 'class.carta.php';
session_start();
$_SESSION['creditiCPU'] = 100;
$_SESSION['creditiUser'] = 50;
// qui l'utente gioca contro la CPU
// creo un nuovo mazzo
$mazzo = new Mazzo();
// mescolo il mazzo
$mazzo->mischia();
// dai al giocatore una carta
$carta_giocatore = $mazzo->pesca();
// mostra la carta al giocatore
echo "<img src='carte/" . $carta_giocatore->getImage() . "' />";
// dai al banco una carta
$carta_banco = $mazzo->pesca();

?>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="index.js"></script>
<div id="crediti">Crediti disponibili: <?php echo $_SESSION['creditiUser'] ?></div>
<input name="puntata" type="number" id="puntata" value="1" min="1" max="50" />
<button id="btnPuntata">Punta</button>
<button id="btnPesca">Carta!</button>
<button id="btnStai">Sto!</button>