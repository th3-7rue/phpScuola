<?php

include "app.php";

include "navbar.html";
$animali = array("dio" => array("cane", "maiale", "porco"), "madonna" => array("puttana", "maiala dybala"), "tua zia", "tua nonna", "tua sorella");
foreach ($animali as $animale => $specifica) {
    if (is_array($specifica)) {
        foreach ($specifica as $specifica2) {
            echo "<p>$animale $specifica2</p>";
        }
    } else {
        echo "<p>$specifica</p>";
    }
}
