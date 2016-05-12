<?php
    $n = trim(fgets(STDIN));
    for($i=0; ; $i++){
        echo $n;
        $n=$n-1;
        if($n==0){
            break;
        }
        echo "\n";
    }
?>
