<?php
$tag = explode(" ", trim(fgets(STDIN)));
$text = trim(fgets(STDIN));
$start  = 0;
while(strpos($text, $tag[0], $start) !== false){
    $tag_A = strpos($text, $tag[0], $start);
    $start = strpos($text, '>', $tag_A);
    $tag_B = strpos($text, $tag[1], $start);
    if($tag_B == false){
        break;
    }
    $result = substr($text, $start+1, ($tag_B-1)-$start);
    if($result == false){
        echo "<blank>\n";
    }else{
        echo $result. "\n";
    }
}
?>
