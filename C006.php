<?php
$input = trim(fgets(STDIN));
$num = explode(" ", $input);
$N = $num[0];
$M = $num[1];
$K = $num[2];
$C = trim(fgets(STDIN));
$Ci = explode(" ", $C);
$X_array = array();
$S_array = array();
for($i=0; $i<$M; $i++){
    $X = trim(fgets(STDIN));
    $Xi = explode(" ", $X);
    $X_array[$i] = $Xi[$i];
    $sum = 0;
    for($j=0; $j<$N; $j++){
        $sum = $sum + ($Ci[$j] * $Xi[$j]);
    }
    $S_array[$i] = round($sum);
}
rsort($S_array);
for($k=0; $k<$K; $k++){
    echo $S_array[$k] . "\n";
}
?>
