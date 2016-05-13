<?php
$input = trim(fgets(STDIN));
$num = explode(" ", $input);
$X = $num[0];
$Y = $num[1];
$R = $num[2];
$N = trim(fgets(STDIN));
$x_array = array();
$y_array = array();
for($i=0; $i<$N; $i++){
    $point = trim(fgets(STDIN));
    $point_n = explode(" ", $point);
    $x_n = $point_n[0];
    $y_n = $point_n[1];
    $x_array[$i] = $x_n;
    $y_array[$i] = $y_n;
}
for($j=0; $j<$N; $j++){
    $sum = ($X-$x_array[$j])**2 + ($Y-$y_array[$j])**2;
    if($sum >= $R**2){
        echo "silent\n";
    }else{
        echo "noisy\n";
    }
}
?>
