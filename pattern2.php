<?php

/* 

2.  *
    **
    ***
    ****
    *****
*/

$num = 5;

// for our outer loops - row
for( $row=1; $row<=$num; $row++ ){
    
    for( $col=1; $col<=$row; $col++ ){
        echo '*';
    }
    
    echo "\n";
     
}

?>