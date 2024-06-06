<?php 
$string = "I Love Bangladesh";
$temp = "";
$reversed = "";
for($i=0 ; $i < strlen($string); $i++){
  if($string[$i] == " "){
    $reversed .= $temp . " ";
    $temp = "";
    continue;
  }
  $temp = $string[$i] . $temp;
}
$reversed .= $temp;
echo($reversed );