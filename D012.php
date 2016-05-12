<?php
  $n = trim(fgets(STDIN));
  if($n < 0){
      echo -$n;
  }elseif($n >= 0){
      echo $n;
  }
?>
