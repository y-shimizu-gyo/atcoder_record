<?php
fscanf(STDIN, "%d", $a);

$arr = [];
for($i = 1; $i <= 9; $i++){
  $num_line = [];
  for($j = 1; $j <= 9; $j++){
    $num_line[] = $i * $j;
  }
  $arr[] = $num_line;
}


$ans = 0;
foreach($arr as $line){
  foreach($line as $num){
    if($num !== $a){
      $ans += $num;
    }
  }
}
echo $ans;
?>