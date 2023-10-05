<?php
session_start();

$name = $_GET["name"];
$_SESSION["name"] = $name;
setcookie("name", $name);
$_SESSION["punteggio"] = 0;
header("Location: q1.php");
