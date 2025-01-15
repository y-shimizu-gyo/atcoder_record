<?php
    fscanf(STDIN, "%d %d %d", $n, $l, $r);
    for ($i = 1; $i <= $n; $i++){
        $arr[] = $i;
    }

    $spliced = array_splice($arr, $l-1, $r-$l+1);

    $rev = array_reverse($spliced);

    $ans = array_splice($arr, $l-1, 0, $rev);
    
    
    echo $ans;
?>