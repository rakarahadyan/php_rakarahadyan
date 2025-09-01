<?php

$jml = $_GET['jml'];
echo "<table border=1 cellspacing='0'>\n";
for ($a = $jml; $a > 0; $a--) {
    $totalRow = 0;
    for ($b = $a; $b > 0; $b--) {
        $totalRow += $b;
    }
    echo "<tr><td colspan='$jml' >Total : $totalRow</td></tr>";
    echo "<tr>\n";
    for ($b = $a; $b > 0; $b--) {
        echo "<td>$b</td>";
    }
    echo "</tr>\n";
}
echo "</table>";
