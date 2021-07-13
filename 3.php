<?php
function arithmetic($arr)
  {
   $d = $arr[1] - $arr[0];
   for($i=0; $i<sizeof($arr)-1; $i++)
    {
        if (($arr[$i + 1] - $arr[$i]) != $d)
        {
             
             return "Not an arithmetic progression";
        }       
    }
    return "An arithmetic progression";
}
$my_arr1 = array(6, 7, 9, 11);
$my_arr2 = array(5, 7, 9, 11);

print_r(arithmetic($my_arr1)."\n");
print_r(arithmetic($my_arr2)."\n");
?>