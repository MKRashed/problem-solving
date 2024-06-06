<?php
function sumInteger($nm)
{
  $sum = 0;
  for ($i = 0; $i <= strlen($nm); $i++) {
    if ($i < 0) {
      $sum = -1 * $i;
    }
    $sum += $i;
  }
  return $sum;
}
$sum = sumInteger(-123);
echo ($sum);
