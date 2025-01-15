<?php
fscanf(STDIN, "%d %d %d", $a, $b, $c);

if($a == $b && $b == $c) {
    echo 'Yes';
} else if ($a + $b == $c || $b + $c == $a || $c + $a == $b) {
    echo 'Yes';
} else {
    echo 'No';
}
?>