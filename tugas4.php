<?php
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