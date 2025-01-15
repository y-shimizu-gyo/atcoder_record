<?php
fscanf(STDIN, "%d %d", $n, $d);
$arr = [];

for($i = 1; $i <= $n; $i++) {
    fscanf(STDIN, "%d %d", $k, $l);
    $arr[] = [$k, $l];
}

for($k = 1; $k <= $d; $k++){
    $max = 0;
    foreach($arr as [$t, $l]){
        $l += $k;
        $weight = $t * $l;
        if($max < $weight){
            $max = $weight;
        }
    }
    echo $max . "\n";
}

?>