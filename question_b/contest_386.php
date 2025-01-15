<?php
$line = trim(fgets(STDIN));

$pieces = str_split($line);

$i = 0;
$count = 0;
while($pieces[$i] != null){
  if($pieces[$i] == 0 && $pieces[$i+1] == 0){
    $i += 2;
  } else {
    $i += 1;
  }
  $count += 1;
}
echo $count;
?>
