<?php  
    for($i=1;$i<=5;$i++){  
        for($j=1;$j<=$i;$j++){  
            echo $j;
        }
        for($k=4; $k>=$i ; $k--) {
            echo $k==4?" ":"  ";
        }
        for($l=$i; $l >=1 ; $l--) {
            echo $l==5?"":"$l";
        }
        echo "\n";  
    }  
    for($i=4;$i>=0;$i--){  
        for($j=1;$j<=$i;$j++){  
            echo $j;  
        }  
        for($k=4; $k>=$i ; $k--) {
            echo $k==4?" ":"  ";
        }
        for($l=$i; $l >=1 ; $l--) {
            echo "$l";
        }
        echo "\n";  
    } 
