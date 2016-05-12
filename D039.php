<?php
    $a = trim(fgets(STDIN));
    $b = trim(fgets(STDIN));
    $c = trim(fgets(STDIN));
    if($a==$b && $b==$c){
        echo "YES";
    }else{
        echo "NO";
    }
?>
