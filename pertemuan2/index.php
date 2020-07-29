<?php

// Pertemuan 2 - PHP Dasar
// Sintax PHP

// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan Sintaks PHP
// 1. PHP didalam HTML
// 2. HTML didalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali angka, tapi boleh mengandung angka
// $nama = "Rofiif Zufar Allam";
// echo "Nama saya $nama";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation
// .
// $nama_depan = "Zufar";
// $nama_belakang = "Allam";
// echo $nama_depan . " " .  $nama_belakang;

// assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Zufar";
// $nama .= " ";
// $nama .= "Allam";
// echo $nama;

// perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// identitas
// ===, !===
// var_dump(1 === "1");

// logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
