<?php
function handler($no, $str){
  //echo "Error $str\n";
  
  exit;
  return true;
}

set_error_handler('handler');
echo $a;
trigger_error('My Error');
