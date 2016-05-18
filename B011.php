<?php
$N = explode(" ", trim(fgets(STDIN)));
$n = $N[0];
$m = $N[1];
if(floor($m/$n)%2 == 1){
    echo ((floor($m / $n)+1)*$n)- (2*$n-1) + ((floor($m / $n)+1)*$n - $m);
}elseif($m%(2*$n) == 0){
    echo $m - (2*$n-1);
}else{
    echo ((floor($m / $n)*$n)+1)+(2*$n-1) - ($m - ((floor($m / $n)*$n)+1));
}
?>
