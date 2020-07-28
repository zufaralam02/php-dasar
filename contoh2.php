<?php

// $angka = [
//     "satu",
//     "dua",
//     "tiga"
// ];

// for ($i = 0; $i < count($angka); $i++) {
//     echo "<br>" . $angka[$i];
// }

// foreach ($angka as $ang) {
//     echo "<br>" . $ang;
// }

$names = [
    ["Hasbi", "TKJ", "Karawang"],
    ["Faiz", "TKJ", "Karawang"],
    ["Dimas", "RPL", "Bekasi"],
    ["Fikri", "RPL", "Malang"]
];

foreach ($names as $name) {
    echo "<ul>";
    foreach ($name as $n) {
        echo "<li>" . $n . "</li>";
    }
    echo "</ul>";
}
