<!-- Bagaimana cara mengubah banyak spasi menjadi satu spasi dengan PHP
·         $teks = ‘saya ingin     makan      sate’;
·         $output = ‘saya ingin makan sate’; -->

<?php

// Bisa menggunakan Fitur Trim Agar lebih simple
// $teks = "saya ingin     makan      sate";

// echo trim($teks);

// Bisa juga Menggunakan For

$teks = "saya ingin     makan      sate";
$tampung = "";

$expInput = explode(" ", $teks);

for ($i=0; $i<count($expInput); $i++){
    $tampung = $tampung . $expInput[$i]." ";
}

echo $tampung;