<?php
// mostra errori
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//print_r($_POST);
if (isset($_POST["username"]) and isset($_POST['password'])) {

    //connessione al database
    require("config.php"); //parametri di connessione
    $mydb = new mysqli(SERVER, UTENTE, PASSWORD, DATABASE);
    if ($mydb->connect_errno) {
        echo "Errore nella connessione a MySQL: (" . $mydb->connect_errno . ") " . $mydb->connect_error;
        exit();
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username already exists
    $selectQuery = $mydb->prepare('SELECT * FROM utenti WHERE nome = ?');
    $selectQuery->bind_param("s", $username);
    //eseguo la query
    $selectQuery->execute();
    $selectQuery->store_result();
    // Bind the result
    $result = $selectQuery->num_rows;

    //echo $result;
    $selectQuery->close();

    if ($result > 0) {
        require 'daisyUI.php';
        echo 'Account già esistente';
        ?>
        <br><a href="login.php">Accedi</a>
        <?php
        $mydb->close();
        die;
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $insertQuery = $mydb->prepare('INSERT INTO utenti (nome, hash) VALUES (?, ?)');
        $insertQuery->bind_param('ss', $username, $password);
        $insertQuery->execute();
        $insertQuery->close();
        $mydb->close();
        header('Location: login.php');
    }
}
?>