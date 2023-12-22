<?php
session_start();
if (isset($_POST['pw-old']) and isset($_POST['pw-new']) and isset($_SESSION['id'])) {
    require 'config.php';
    $mydb = new mysqli(SERVER, UTENTE, PASSWORD, DATABASE);
    if ($mydb->connect_errno) {
        echo "Errore nella connessione a MySQL: (" . $mydb->connect_errno . ") " . $mydb->connect_error;
        exit();
    }
    $id = $_SESSION['id'];
    //echo $id;
    $pwOld = $_POST['pw-old'];
    //echo $pwOld;
    $stmt = $mydb->prepare('select hash from utenti where id = ?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->bind_result($hash);
    $stmt->fetch();
    $stmt->close();

    //echo $hash;
    if (password_verify($pwOld, $hash)) {
        // Le password corrispondono
        $pwNew = password_hash($_POST['pw-new'], PASSWORD_DEFAULT);
        $stmt = $mydb->prepare('update utenti set hash = ? where id = ?');
        $stmt->bind_param('si', $pwNew, $id);
        $stmt->execute();
        ?>
        <p>Password cambiata</p>
        <a href="login.php">Accedi</a>
        <?php
    } else {
        ?>
        <p>La password vecchia non è corretta</p>
        <?php
    }
} else {
    ?>
    <p>E' necessario accedere prima</p>
    <a href="login.php">Accedi</a>
    <?php
}