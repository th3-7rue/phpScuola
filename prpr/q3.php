<?php
require_once "Domanda.php";
// nuovo oggetto Domanda

$domanda3 = new Domanda(
    "Quanti scudetti ha vinto il Milan?",
    array(
        "36",
        "3",
        "19",
        "18"
    ),
    2
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Domanda 3</title>
</head>

<body>
    <h1>Domanda 3</h1>
    <form action="punteggio.php" method="get">
        <p><?php echo $domanda3->getTesto(); ?></p>
        <input type="hidden" name="domanda" value="3">
        <?php
        foreach ($domanda3->getOpzioni() as $key => $value) {
            echo "<input type=\"radio\" name=\"risposta\" value=\"$key\">$value<br>";
        }
        ?>
        <input type="submit" value="Invia">
    </form>
</body>