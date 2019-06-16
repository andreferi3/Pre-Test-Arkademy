<?php
    // filename tugas4
    // author andreferi

    /*
        PERTANYAAN :

        4. Kategori: Intermediate

        Data Sorting
        REQUIREMENT :
        1. Input berupa array statis yang sudah disediakan secara HARDCODE
        2. Array dibuat sepanjang 10 data
        3. Output menampilkan 4 hal :
              a. Data terkecil
              b. Data terbesar
              c. Data yang disortir dari data terkecil ke terbesar
              d. Data yang disortir dari data terbesar ke terkecil

        INPUT : 

        Array Bilangan = [6,22,34,15,2,13,26,57,42,32]
    */
    // User input
    $input = [6,22,34,15,2,13,26,57,42,32];

    // max
    $max = max(array_values($input));
    $min = min(array_values($input));

    echo("Data Terbesar : ".$max."<br>");
    echo("Data Terkecil : ".$min."<br>");

    function dataTertinggi()
    {
        global $input;
        
        sort($input);
        echo "Data Tertinggi : ";
        for($i = 0; $i < count($input); $i++)
        {
            echo $input[$i]." ";
        }
    }

    function dataTerendah()
    {
        global $input;

        rsort($input);
        echo "Data Terendah : ";
        for($i = 0; $i < count($input); $i++)
        {
            echo $input[$i]." ";
        }
    }

    dataTerendah();
    echo "<br>";
    dataTertinggi();
?>