<?php

////// array //////
// variable yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki data yang berbeda
// pasangan antara key dan value
// key nya adalah index yang di mulai dari 0

// membuat array ada 2 cara
// 1. cara lama
$hari = array("Senin", "Selasa", "Rabu");
// 2. cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "text", false];

// menampilkan array
// echo $hari; (salah)
// var_dump(); / print_r(); (benar)
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);
