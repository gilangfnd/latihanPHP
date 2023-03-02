<!-- Berapa kali angka 7 muncul diantara bilangan 1 sampai dengan 100? -->

<?php

$output = 0;

for($i=1; $i<=100; $i++){
    $slptInput = str_split($i);
    for($a=0; $a<count($slptInput); $a++){
        if($slptInput[$a] == 7){
            $output++;
            echo $i."<br>";
        }
    }
}

echo $output;