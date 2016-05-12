<?php
    $t_1 = trim(fgets(STDIN));
    $t_2 = trim(fgets(STDIN));
    $t_3 = trim(fgets(STDIN));
    $t_4 = trim(fgets(STDIN));
    $t_5 = trim(fgets(STDIN));
    $t_6 = trim(fgets(STDIN));
    $t_7 = trim(fgets(STDIN));
    $week = array($t_1, $t_2, $t_3, $t_4, $t_5, $t_6, $t_7);
    $count = 0;
    for($i=0; $i<7; $i++){
        if($week[$i]<=30){
            $count++;
        }
    }
    echo $count;
?>
