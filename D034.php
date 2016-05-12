<?php
    $n = trim(fgets(STDIN));
    $sel = 21 % $n;
    if($sel==0){
        echo $n;
    }else{
        echo $sel;
    }
?>
