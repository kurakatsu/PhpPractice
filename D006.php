<?php
$input = trim(fgets(STDIN));
$num = explode(" ",$input);
$n = (int)$num[0];
$s = $num[1];

if($s=='km'){
    echo $n * 1000000;
}elseif($s=='m'){
    echo $n * 1000;
}elseif($s=='cm'){
    echo $n * 10;
}
 ?>
