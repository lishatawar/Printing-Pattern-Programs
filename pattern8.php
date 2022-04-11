<?php
// 8.      *
//        ***
//       *****
//      *******
//     *********

$num = 5;

for( $row=1; $row<2 * $num; $row++ ){
    
    // space
    for( $i=0; $i<2 * $num-$row; $i++){
        echo " ";
    }
   
    if($row%2 != 0){
       for($col=$row; $col>=1; $col--){
            echo "* ";
       }
    }
    echo "\n";
    
    
}

?>