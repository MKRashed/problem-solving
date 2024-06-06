<?php
function minvalue($arr){
	$min = $arr[0];
    
    for($i=1;$i<count($arr);$i++){
    	if($min > $arr[$i]){
        	$min = $arr[$i];
        }
    }
     if ($min < 0) {
        $min *= -1;
    }
    return $min;
}
echo(minvalue([10,12,15,18,92,-3,-15]));