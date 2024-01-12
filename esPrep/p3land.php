<?php
if (isset($_GET['film'])) {
    require 'conn.php';
    $film = $_GET['film'];
    $result = $mysqli->query('SELECT a.nome,a.cognome FROM attore a join recita r on r.fkAttore=a.id join film f on f.id=r.fkFilm where f.id=$film');
    while ($row = $result->fetch_assoc()) {
        echo $row['nome'] . ' ' . $row['cognome'] . '<br>';
    }
}

