<!-- Sebuah variable berisi teks data $data = “ harga cabe merah sekarang Rp. 75.000” Pertanyaannya:
a. Bagaimana cara mengambil angka dalam teks tersebut dengan PHP, sehingga $output = 75000;
b.  Bagaimana mengambil angka dan titik dalam teks tersebut dengan PHP, sehingga $output = 75.000; -->

<?php
$input = "harga cabe merah sekarang Rp. 75.000";

$expInput = explode(" ", $input);



$inputEnd = str_replace(".", "", $expInput[5]);

echo "{$expInput[5]}<br>";
echo "{$inputEnd}";
