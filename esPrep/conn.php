<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'esprep');
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}