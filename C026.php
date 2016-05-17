<?php
$N = explode(" ", trim(fgets(STDIN)));
$S = $N[1];
$p = $N[2];
$carrot = array();
for($i=0; $i<$N[0]; $i++){
    $carrot[$i] = explode(" ", trim(fgets(STDIN)));
}
$mass = array();
for($j=0; $j<$N[0]; $j++){
    if($S-$p <= $carrot[$j][1] && $carrot[$j][1] <= $S+$p){
        $mass[$j] = $carrot[$j][0];
    }else{
        $mass[$j] = "0";
    }
}
$max = max($mass);
$result = 0;
foreach($mass as $key => $value){
    if($value == $max){
        $result = $key + 1;
        break;
    }
}
if($max == 0){
    echo "not found";
}else{
    echo $result;
}
?>
