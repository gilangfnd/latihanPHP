<!-- Ada dua buah tanggal $a = ‘2014-05-20 04:21:03’; dan $b = ‘2014-07-12 13:32:45’;
          Pertanyaannya:
a.       Hitunglah selisih kedua tanggal tersebut dengan PHP sehingga menghasilkan output: 23 hari 9 jam 11 menit 42 detik. -->


<?php
 
$tgl1 = new DateTime("2014-05-20 04:21:03");
$tgl2 = new DateTime("2014-07-12 13:32:45");
$jarak = $tgl2->diff($tgl1);

echo "Hari : {$jarak->d} <br>";
echo "Jam : {$jarak->h} <br>";
echo "Menit: {$jarak->i}.<br>";
echo "Detik : {$jarak->s} <br>";
?>