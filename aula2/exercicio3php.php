<?php
$array = array();
$m = 10;
$p = 0;
$i = 0;
while ($i <= 4) 
{
$array[$i] = mt_rand(0,10);
$i++;
}
$i=0;
foreach($arr as $v)
{
if ($v < $men)
{
$m = $v;
$p = $i;
}
echo $m $p;