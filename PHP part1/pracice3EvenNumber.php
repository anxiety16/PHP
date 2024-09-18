<?php
$matrix = [
    [12, 23, 34],
    [45, 55, 62],
    [71, 84, 90]
];

$i = 0;
$n = 0;

while ($i < count($matrix)) {
    while ($n < count($matrix[$i])) {
        if ($matrix[$i][$n] % 2 == 0) {
            echo "Even Number: " . $matrix[$i][$n] . "<br>";
        }
        $n++;
    }
    $i++;
    $n = 0;
}
?>