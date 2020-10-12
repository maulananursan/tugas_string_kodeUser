<?php 

//Belajar membuat username dari gabungan nama_depan+random(1-100)+nama_belakang

$nama = "Maulana Nursan Alfarizi";
$array_nama = explode(" ", $nama);
$angka_rand = rand(1,100);
$kode= $array_nama[0].$angka_rand.$array_nama[2];

echo "Nama : ",$nama,"<br>";
echo "Kode : ", $kode;

 ?>