<?php
/*
6.       *
        **
       ***
      ****
     *****
*/

$num = 5;

for( $row=1; $row<=$num; $row++){

   for( $i=1; $i<=$num-$row; $i++){
      echo " ";
   }
   
   for( $col=1; $col<=$row; $col++){
      echo "*";
   }
   
   echo "/n";

}


?>
