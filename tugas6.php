<?php
    // filename tugas6
    // author andreferi

    /*
        PERTANYAAN :

        Kategori: Advanced

        Decimal to Binary
        
        Ketentuan Program :
            1. User menginput angka desimal
            2. Output berupa angka biner dari angka desimal tersebut
            3. Program ini hanya boleh menggunakan fungsi IF, SWITCH, FOR, WHILE

    */
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