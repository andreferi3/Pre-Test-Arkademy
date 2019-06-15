<?php
    function convert($n) {
        $biner = "";

        while($n > 0)
        {
            if($n % 2 == 0) {
                $n/=2;
                $biner .= 0;
            } else {
                $n = ($n/2)-0.5;
                $biner .= 1;
            }
        }
        echo $hasil = strrev($biner);
    }

    convert(5);
?>