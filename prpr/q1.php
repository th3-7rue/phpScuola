<?php
require_once "Domanda.php";
// nuovo oggetto Domanda
$domanda1 = new Domanda(
    "Quanti scudetti ha vinto l'Inter?",
    array(
        "0",
        "18",
        "36",
        "19"
    ),
    3
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domanda 1</title>
</head>

<body>
    <h1>Domanda 1</h1>
    <form action="punteggio.php" method="get">
        <p><?php echo $domanda1->getTesto(); ?></p>
        <input type="hidden" name="domanda" value="1">
        <?php
        foreach ($domanda1->getOpzioni() as $key => $value) {
            echo "<input type=\"radio\" name=\"risposta\" value=\"$key\">$value<br>";
        }
        ?>
        <input type="submit" value="Invia">
    
    </form>
</body>

</html>