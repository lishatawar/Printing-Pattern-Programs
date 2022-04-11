<?php
/*
7.   *****
      ****
       ***
        **
         *
*/

$num = 5;
for( $row=0; $row<$num; $row++){
    // space   
    for( $i=1; $i<=$row; $i++){
        echo " ";
    }

    for( $col=$row; $col<$num; $col++){
        echo "*";
    }
    echo "\n";
}
