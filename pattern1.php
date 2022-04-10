<?php

/* 
1.  *****
    *****
    *****
    *****
    *****
*/

$num = 5;

// for our outer loops - row
for( $row=1; $row<=$num; $row++ ){
    
    // for our columns 
    for( $col=1; $col<=$num; $col++ ){
        echo '*';
    }
    
    echo "\n";  
}

?>