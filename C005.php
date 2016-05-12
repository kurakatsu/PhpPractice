<?php
$n = trim(fgets(STDIN));

$input = array();
for($i=0; $i<$n; $i++){
    $input[$i] = trim(fgets(STDIN));
}
foreach($input as $ip){
    $flag=0;
    $num = explode(".", $ip);
    if(substr_count($ip, '.') == 3){
        if(count($num) == 4){
            foreach($num as $ip_value){
                if(0 <= $ip_value && $ip_value <= 255){
                    $flag=1;
                }else{
                    $flag=0;
                    break;
                }
            }
        }
    }
    if($flag==1){
        echo "True\n";
    }else{
        echo "False\n";
    }
}
?>
