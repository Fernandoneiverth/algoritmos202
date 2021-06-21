<?php
$i = 0;
$array = array();
$num = 0;
while ($i <= 19) {
$array[] = mt_rand(0,5);
if ($array[$i-1] == 3)
{
$num++;
}
$i++;
}
for ($i=0; $i <= 19; $i++) { 
var_dump ($array);
}
echo "\n"
echo .$num;