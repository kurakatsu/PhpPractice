<?php
$input = explode(" ", trim(fgets(STDIN)));
$n = $input[0];
$r = $input[1];
$box_array = array();
for($i=0; $i<$n; $i++){
    $box = explode(" ", trim(fgets(STDIN)));
    $h = $box[0];
    $w = $box[1];
    $d = $box[2];
    $box_array[$i] = $box;
}
foreach($box_array as $key =>$box_array2){
    sort($box_array2);
    if($box_array2[0] >= $r*2){
        echo $key + 1 . "\n";
    }
}

?>
