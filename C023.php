<?php
$num = explode(" ", trim(fgets(STDIN)));
$N = trim(fgets(STDIN));
$my_num = array();
for($i=0; $i<$N; $i++){
    $my_num[$i] = explode(" ", trim(fgets(STDIN)));
}
foreach($my_num as $value){
    $count = 0;
    for($j=0; $j<6; $j++){
        for($j1=0; $j1<6; $j1++){
            if($num[$j] == $value[$j1]){
                $count++;
            }
        }
    }
    echo $count. "\n";
}
?>
