<?php
$n = trim(fgets(STDIN));
$m = trim(fgets(STDIN));
$r_array = array();
for($i=0; $i<$m; $i++){
    $room = trim(fgets(STDIN));
    $r_array[$i] = $room;
}
$count = 0;
for($j=0; $j<$m; $j++){
    $pos = strpos($r_array[$j], $n);
    if($pos === false){
        echo $r_array[$j] . "\n";
        $count++;
    }
}
if($count==0){
    echo "none";
}
?>
