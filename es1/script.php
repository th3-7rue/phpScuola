<?php
switch ($_POST["select"]) {
    case 1:
        ordinaPunti();
        break;
    case 2:
        ordinaNome();
        break;
    case 3:
        ordinaPuntiInverso();
        break;
}
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

// ordinata per punti
function ordinaPuntiConfronto($a, $b)
{
    if(a[1] == b[1])
        return 0;
    return (a[1] < b[1]) ? -1 : 1; // ternary operator (condizione) ? (se vera) : (se falsa
    // if(a[1] < b[1])
    //     return -1;
    // else
    //     return 1;
    // return 0;
    
}
function ordinaPunti()
{
    usort($classifica, "ordinaPuntiConfronto");
    echo "<h1>Classifica ordinata per punti</h1>";
    echo "<table>";
    echo "<tr><th>Squadra</th><th>Punti</th><th>Partite giocate</th><th>Vinte</th><th>Pareggiate</th><th>Perse</th><th>Gol fatti</th><th>Gol subiti</th></tr>";
    foreach ($classifica as $squadra) {
        echo "<tr>";
        foreach ($squadra as $campo) {
            echo "<td>$campo</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
// ordinata per nome
function ordinaNomeConfronto($a, $b)
{
    return $a[0] > $b[0];
}
function ordinaNome()
{
    usort($classifica, "ordinaNomeConfronto");
    echo "<h1>Classifica ordinata per nome</h1>";
    echo "<table>";
    echo "<tr><th>Squadra</th><th>Punti</th><th>Partite giocate</th><th>Vinte</th><th>Pareggiate</th><th>Perse</th><th>Gol fatti</th><th>Gol subiti</th></tr>";
    foreach ($classifica as $squadra) {
        echo "<tr>";
        foreach ($squadra as $campo) {
            echo "<td>$campo</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
// ordinata per punti inverso
function ordinaPuntiInversoConfronto($a, $b)
{
    return $a[1] > $b[1];
}
function ordinaPuntiInverso()
{
    usort($classifica, "ordinaPuntiInversoConfronto");
    echo "<h1>Classifica ordinata per punti inverso</h1>";
    echo "<table>";
    echo "<tr><th>Squadra</th><th>Punti</th><th>Partite giocate</th><th>Vinte</th><th>Pareggiate</th><th>Perse</th><th>Gol fatti</th><th>Gol subiti</th></tr>";
    foreach ($classifica as $squadra) {
        echo "<tr>";
        foreach ($squadra as $campo) {
            echo "<td>$campo</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
