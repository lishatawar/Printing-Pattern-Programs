<?php

/* 

3.  *****
    ****
    ***
    **
    *
*/

$num = 5;

// for our outer loops - row
for( $row=1; $row<=$num; $row++ ){
    
    for( $col=$num; $col>=$row; $col-- ){
        echo '*';
    }
    
    echo "\n";
     
}

?>