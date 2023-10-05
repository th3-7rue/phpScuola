<?php
require_once "Domanda.php";
// nuovo oggetto Domanda

$domanda2 = new Domanda(
    "Quanti scudetti ha vinto la Juventus?",
    array(
        "0",
        "18",
        "36",
        "3"
    ),
    2
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Domanda 2</title>
</head>

<body>
    <h1>Domanda 2</h1>
    <form action="punteggio.php" method="get">
        <p><?php echo $domanda2->getTesto(); ?></p>
        <input type="hidden" name="domanda" value="2">
        <?php
        foreach ($domanda2->getOpzioni() as $key => $value) {
            echo "<input type=\"radio\" name=\"risposta\" value=\"$key\">$value<br>";
        }
        ?>
        <input type="submit" value="Invia">
    </form>
</body>