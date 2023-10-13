<?php
session_start();
$puntata = $_POST['puntata'];
$_SESSION['creditiUser'] -= $puntata;
echo $_SESSION['creditiUser'];
