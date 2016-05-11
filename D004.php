<?php
$n = trim(fgets(STDIN));
//$num = explode(" ", $input);

$input = array();
for($i=0; $i<$n; $i++){
    $input[$i] = trim(fgets(STDIN));
}
    echo "Hello" . " ";
for($i=0; $i<$n; $i++){
    //$input[$i] = trim(fgets(STDIN));
    echo $input[$i];
    if($i < $n-1){
        echo ",";
    }
}
echo ".";
 ?>
