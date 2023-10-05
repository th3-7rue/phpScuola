<?php
require_once "Domanda.php";
// nuovo oggetto Domanda
$domanda5 = new Domanda(
    "Quanti scudetti ha vinto l'aroma?",
    array(
        "3",
        "18",
        "19",
        "10"
    ),
    0
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Domanda 5</title>
</head>

<body>
    <h1>Domanda 5</h1>
    <form action="punteggio.php" method="get">
        <p><?php echo $domanda5->getTesto(); ?></p>
        <input type="hidden" name="domanda" value="5">
        <?php
        foreach ($domanda5->getOpzioni() as $key => $value) {
            echo "<input type=\"radio\" name=\"risposta\" value=\"$key\">$value<br>";
        }
        ?>
        <input type="submit" value="Invia">
    </form>
</body>