<?php    
      
    $arr = array(0, 1, 1, 6, 1, 9, 1);
      
    $arr_freq = array_count_values($arr);    
    
     arsort($arr_freq);
       
    
     $new_arr = array_keys($arr_freq);
       
     echo " most frequent element is:"." ".$new_arr[0];
?>