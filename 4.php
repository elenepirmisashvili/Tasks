
<?php

function pushZerosToEnd(&$arr, $n)
{
    $count = 0;


    for ($i = 0; $i < $n; $i++)
        if ($arr[$i] != 0)

            $arr[$count++] = $arr[$i];


    while ($count < $n)
        $arr[$count++] = 0;
}

$arr = array( 9, 8, 4, 0, 0,
             2, 7, 0, 0, 9);
$n = sizeof($arr);
pushZerosToEnd($arr, $n);
echo "zeros to end of array :\n";

for ($i = 0; $i < $n; $i++)
echo $arr[$i] . " ";


?>
