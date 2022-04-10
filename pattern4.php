<?php

/* 
4.  1
    1 2
    1 2 3
    1 2 3 4
    1 2 3 4 5
*/

$num = 5;

// for our outer loops - row
for( $row=1; $row<=$num; $row++ ){
    
    for( $col=1; $col<=$row; $col++ ){
        echo ' '.$col.' ';
    }
    
    echo "\n";
     
}

?>