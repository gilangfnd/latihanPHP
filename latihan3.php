<!-- Sebuah variable berisi teks $data = “ No telp 02123456 an Bambang Pamungkas RpTag:749570 RpAdm:2500 TotalBayar Rp 750.250 segera dibayar ya !!”
           Pertanyaannya:
a.       Buatlah output variable seperti di bawah ini dengan PHP :
·         $no_tlp = ‘02123456';
·         $RpTag = ‘749570’;
·         $RpAdm = ‘2500’;
·         $TotalBayar = ‘750250’; -->

<?php

  $json = '{
    "no_telp": "02123456",
    "nama": "bambang Pamungkas",
    "RpTag": "749570",
    "RpAdm": "2500",
    "TotalBayar": "Rp 750.250"
  }';
  $data = json_decode($json);
  $input  = str_replace(".", "", $json);
  $input2  = str_replace("Rp", "", $json);

  
  echo "no_telp: {$data->no_telp} <br>";
  echo "RpTag: {$data->RpTag} <br>";
  echo "RpAdm: {$data->RpAdm} <br>";
  echo "TotalBayar: {$data->TotalBayar} <br>";

//   $data = “no telp 02123456 an Bambang Pamungkas RpTag:749570 RpAdm:2500 TotalBayar Rp 750.250 segera dibayar ya !!”

//   $input  = str_replace(".", "", $data);
//   $input2  = str_replace("Rp", "", $data);

//   echo $no_tlp.<br/>;
//   echo $RpTag.<br/>;
//   echo $RpAdm.<br/>;
//   echo $TotalBayar.<br/>;

  