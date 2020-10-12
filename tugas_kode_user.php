<?php 

$nama = "Maulana Nursan Alfarizi";
$array_nama = explode(" ", $nama);
$angka_rand = rand(1,100);
$kode= $array_nama[0].$angka_rand.$array_nama[2];

print_r($kode);

 ?>