<?php
session_start();
?>
<form action="p4.php" method="get">
    <input type="text" name="film" id="film" placeholder="Cerca film">
    <button>Elimina</button>
</form>
<?php
require 'conn.php';
if (isset($_GET['film'])) {
    $film = $_GET['film'] .= '%';
    $stmt = $mysqli->prepare('delete recita from recita join film on recita.fkFilm=film.id where film.titolo like ?');
    $stmt->bind_param('s', $film);
    $stmt->execute();
    $stmt->prepare('delete appartiene from appartiene join film on appartiene.fkFilm=film.id where film.titolo like ?');
    $stmt->bind_param('s', $film);
    $stmt->execute();
    $stmt->prepare('delete from film where titolo like ?');
    $stmt->bind_param('s', $film);
    $stmt->execute();
    $rows = $stmt->affected_rows;
    if ($rows = 1) {
?>
        <div>E' stato eliminato un film</div>
    <?php

    } else {
    ?>
        <div>Sono stati eliminati
            <?php $rows ?> film
        </div>
<?php
    }
}
