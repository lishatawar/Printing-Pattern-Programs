<?php

/* 
5.  *
    **
    ***
    ****
    *****
    ****
    ***
    **
    *
*/

$num = 5;

// for our outer loops - row

/* First Method - 

for( $row = 1; $row < 2 * $num; $row++ ){
    
    $condition = $row > $num ? 2 * $num - $row : $row;
    
    for( $col=1; $col<=$condition; $col++){
        echo '*';
    }
    echo "\n";
}
*/


// Second Method
$num = 5;
for( $row = 1; $row <= 2 * $num; $row++ ){
    
    if($row > $num){ // row is greater than to num 
       for($col=2*$num-$row; $col>=1; $col--){
           echo '*';
       }
    }else{
       for($col=1; $col<= $row; $col++){
           echo '*';
       } 
    }
    echo "\n";
}




?>