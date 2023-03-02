<!-- Parsing JSON ke Objek PHP -->

<?php

$json = '{
  "nama_office": "PT.Bumi Pangan Utama",
  "no_telpon": "021 22599232",
  "website": "bumipanganutama.com",
  "alamat": "Jl.Millenium, Peusar, Kec.Panongan, Kabupaten Tangerang, Banten 15710"
}';

$data = json_decode($json);

echo "nama_office: {$data->nama_office} <br>";
echo "no_telpon: {$data->no_telpon} <br>";
echo "website: {$data->website} <br>";
echo "alamat: {$data->alamat} <br>";

$json = '{
  "nama": "Nurul Huda",
  "domisili": "Surabaya",
  "usia": 23,
  "wni": true,
  "hobi": [
    "Berenang", "Berlari", "Bertamasya"
  ]
}';

$mahasiswa = json_decode($json);

echo "Nama: {$mahasiswa->nama} <br>";
echo "Domisili: {$mahasiswa->domisili} <br>";

echo "Hobi: " . implode(", ", $mahasiswa->hobi);
