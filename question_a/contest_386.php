<?php
fscanf(STDIN, "%d %d %d %d", $a, $b, $c, $d);

$arr_count = count(array_unique([$a, $b, $c, $d]));

echo $arr_count === 2 ? 'Yes' : 'No';
?>