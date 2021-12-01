<?php

function mult($x, $y) {
    $z = $x * $y;
    return $z;
}

echo "<table><tr>";
for ($i = 0; $i <= 100; $i++) {
    if ($i == 0) {
        echo "<th></th>";
    } else {
        echo "<th>" . $i . "</th>";
    }
}
echo "</tr>";

for ($r = 1; $r <= 100; $r++) {
    echo "<tr><td>" . $r . "</td>";
    for ($x = 1; $x <= 100; $x++) {
        echo "<td>" . mult($r, $x) . "</td>";
    }
    echo "<tr>";
}
echo "</table>";

?>