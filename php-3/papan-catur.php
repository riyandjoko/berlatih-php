<?php
function papan_catur($angka){
    for ($a = 0; $a < $angka; $a++){
        for($b =0; $b<($angka*2)-1; $b++){

            if ($b %2==1 && $b%2==1){
                echo "#&nbsp";
            }else if($b%2==0 && $b%2==1){
                echo "#&nbsp";
            }else{
                echo "#&nbsp";
            }
        }
        echo "<br>";
    
        
    }
}

// TEST CASES
echo papan_catur(4)."<br> <br>";
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8)."<br> <br>";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5)."<br> <br>" ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>