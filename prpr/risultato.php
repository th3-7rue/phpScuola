<?php
session_start();
$punteggio = $_SESSION["punteggio"];
$nome = $_SESSION["name"];
// punteggio relativo al nome con array
$punteggi = array(
    "name" => $nome,
    "punteggio" => $punteggio
);

// aggiorna cookie array senza json




?>

<body>
    <h1>Risultato</h1>
    <p>Hai totalizzato <?php echo $punteggio; ?> punti</p>
    <a href="q1.php">Ricomincia</a>
    <a href="index.php">Home</a>
</body>