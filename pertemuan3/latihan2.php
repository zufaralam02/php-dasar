<?php

////// Pengkondisian / Percabangan //////
// if else
// if else if else
// ternary
// switch

// $x = 20;
// if ($x < 20) {
//     echo "benar";
// } else if ($x == 20) {
//     echo "pas";
// } else {
//     echo "salah";
// }

$warna = "hijau";

switch ($warna) {
    case "merah":
        echo "warna nya merah";
        break;
    case "kuning":
        echo "warna nya kuning";
        break;
    case "hijau":
        echo "warna nya hijau";
        break;
    default:
        echo "kaga berwarna";
}
