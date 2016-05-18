<?php
$ip = explode(".", trim(fgets(STDIN)));
$ip_ary = array();
for($i=2; $i<4; $i++){
    $ip_ary[$i] = trim($ip[$i], "[]");
    //$ip_ary[$i] = trim($ip_ary[$i], ']');
    $ip_ary[$i] = str_replace("*", "0-255", $ip_ary[$i]);
}
$ip_3 = array();
$ip_3 = explode("-", $ip_ary[2]);//第３オクテット
$ip_4 = array();
$ip_4 = explode("-", $ip_ary[3]);//第４オクテット
$N = trim(fgets(STDIN));
$info = array();
for($j=0; $j<$N; $j++){
    $info[$j] = explode(" ", fgets(STDIN));
}
$info_ip = array();
for($k=0; $k<$N; $k++){
    $info_ip[$k] = explode(".", $info[$k][0]);
}
foreach($info_ip as $key => $info_ip_v){
    if($info_ip_v[0] == $ip[0]){
        if($info_ip_v[1] == $ip[1]){
            if($info_ip_v[2] == $ip[2]){
                if($info_ip_v[3] == $ip[3]){
                    echo $info[$key][0]. " ". trim($info[$key][3], '['). " ". $info[$key][6]. "\n";//一致したIPアドレスの表示
                }elseif($ip_4[0] <= $info_ip_v[3] && $info_ip_v[3] <= $ip_4[1]){
                    echo $info[$key][0]. " ". trim($info[$key][3], '['). " ". $info[$key][6]. "\n";//一致したIPアドレスの表示
                }
            }elseif($ip_3[0] <= $info_ip_v[2] && $info_ip_v[2] <= $ip_3[1]){
                if($ip_4[0] <= $info_ip_v[3] && $info_ip_v[3] <= $ip_4[1]){
                    echo $info[$key][0]. " ". trim($info[$key][3], '['). " ". $info[$key][6]. "\n";//一致したIPアドレスの表示
                }elseif($info_ip_v[3] == $ip[3]){
                    echo $info[$key][0]. " ". trim($info[$key][3], '['). " ". $info[$key][6]. "\n";//一致したIPアドレスの表示
                }
            }
        }
    }
}
?>
