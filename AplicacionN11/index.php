<?php

    function potencias(){
        for($i=1;$i<=4;$i++)
        {
            for($j=1;$j<=4;$j++)
            {
                echo "$i^$j=".pow($i,$j)."<br>";
            }
        }
    }
    
    potencias();
?>