<?php
$count = 0;  
$file = fopen("text.txt", "r");  
while (($line = fgets($file))) {  
    $words = explode(" ", $line); 
    $count = $count + count($words);  
}  
echo("Number of words : " . $count);