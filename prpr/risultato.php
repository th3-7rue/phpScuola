<?php
session_start();
$punteggio = $_SESSION["punteggio"];
$nome = $_SESSION["name"];
if (!isset($_COOKIE[$punteggio]) || $punteggio > $_COOKIE[$punteggio]) {
    setcookie(
        $nome,
        $punteggio,
        time() + (86400 * 30), // 86400 = 1 day
    );
}

?>

<body>
    <h1>Risultato</h1>
    <p>Hai totalizzato <?php echo $punteggio; ?> punti</p>
    <a href="q1.php">Ricomincia</a>
    <a href="index.php">Home</a>
</body>