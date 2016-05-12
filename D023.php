<?php
    $s = trim(fgets(STDIN));
    $s_A = 0;
    $s_st = strlen($s);
    for($i=0; $i<$s_st; $i++){
        if($s[$i] == 'A'){
            $s_A = $s_A+1;
        }
    }
    echo $s_A;
?>
