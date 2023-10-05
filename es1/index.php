<?php
// creare una pagina in php che contenga una struttura dati contenente la classificica di serie A, memorizzando il nome della squadra, i punti, le partite vinte/pareggiate/perse.

$classifica = array(
    array("NAPOLI", 90, 38, 28, 6, 4, 77, 28),
    array("LAZIO", 74, 38, 22, 8, 8, 60, 30),
    array("INTER", 72, 38, 23, 3, 12, 71, 42),
    array("MILAN", 70, 38, 20, 10, 8, 64, 43),
    array("ATALANTA", 64, 38, 19, 7, 12, 66, 48),
    array("ROMA", 63, 38, 18, 9, 11, 50, 38),
    array("JUVENTUS", 62, 38, 22, 6, 10, 56, 33),
    array("FIORENTINA", 56, 38, 15, 11, 12, 53, 43),
    array("BOLOGNA", 54, 38, 14, 12, 12, 53, 49),
    array("TORINO", 53, 38, 14, 11, 13, 42, 41),
    array("MONZA", 52, 38, 14, 10, 14, 48, 52),
    array("UDINESE", 46, 38, 11, 13, 14, 47, 48),
    array("SASSUOLO", 45, 38, 12, 9, 17, 47, 61),
    array("EMPOLI", 43, 38, 10, 13, 15, 37, 49),
    array("SALERNITANA", 42, 38, 9, 15, 14, 48, 62),
    array("LECCE", 36, 38, 8, 12, 18, 33, 46),
    array("VERONA", 31, 38, 7, 10, 21, 31, 59),
    array("SPEZIA", 31, 38, 6, 13, 19, 31, 62),
    array("CREMONESE", 27, 38, 5, 12, 21, 36, 69),
    array("SAMPDORIA", 19, 38, 3, 10, 25, 24, 71)
);
/* visualizzare la classifica:
- ordinata per punti
- in ordine alfabetico
- in ordine di punti inverso
*/



?>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="script.js"></script>

<body>
    <select id="select">
        <option value="0">Scegli un'opzione</option>
        <option value="1">Ordina per punti</option>
        <option value="2">Ordina per nome</option>
        <option value="3">Ordina per punti inverso</option>
    </select>
    <div id="table"></div>
</body>