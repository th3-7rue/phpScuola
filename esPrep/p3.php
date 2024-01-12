<?php
require 'conn.php';
$result = $mysqli->query('SELECT * FROM film');
?>
<label for="film">Seleziona un film</label>
<form action="p3land.php" method="get">
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