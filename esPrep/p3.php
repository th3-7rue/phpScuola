<?php
require 'conn.php';
$result = $mysqli->query('SELECT * FROM film');

?>
<label for="film">Seleziona un film</label>
<form action="p3.php" method="get">
    <select name="film" id="film">

        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <option value='<?php echo $row['id']; ?>'>
                <?php echo $row['titolo']; ?>
            </option>
            <?php
        }
        ?>
        <input type="submit" value="Invia">
    </select>
</form>
<?php
if (isset($_GET['film'])) {
    require 'conn.php';
    $film = $_GET['film'];
    $result = $mysqli->query('SELECT a.nome,a.cognome FROM attore a join recita r on r.fkAttore=a.id join film f on f.id=r.fkFilm where f.id=' . $film);

    while ($row = $result->fetch_assoc()) {
        echo $row['nome'] . ' ' . $row['cognome'] . '<br>';
    }
}

