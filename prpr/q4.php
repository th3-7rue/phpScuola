<?php
require_once "Domanda.php";
// nuovo oggetto Domanda

$domanda4 = new Domanda(
    "Quanti scudetti ha vinto il Nabboli?",
    array(
        "3",
        "36",
        "99",
        "18"
    ),
    0

);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Domanda 4</title>
</head>

<body>
    <h1>Domanda 4</h1>
    <form action="punteggio.php" method="get">
        <p><?php echo $domanda4->getTesto(); ?></p>
        <input type="hidden" name="domanda" value="4">
        <?php
        foreach ($domanda4->getOpzioni() as $key => $value) {
            echo "<input type=\"radio\" name=\"risposta\" value=\"$key\">$value<br>";
        }
        ?>
        <input type="submit" value="Invia">
    </form>
</body>