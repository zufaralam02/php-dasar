<?php

// Pengkondisian / Percabangan
// if else
// if else if else
// ternary
// switch

// $x = 20;
// if ($x < 20) {
//     echo "benar";
// } else if ($x == 20) {
//     echo "bingo";
// } else {
//     echo "salah";
// }

// $x = 20;
// echo ($x >= 20) ? "true" : "false";

// $x = 20;
// echo $x ?? 100;

// ternary
// $nama = isset($_POST['nama']) ? $_POST['nama'] : "default";
// null coalescing
// $nama = $_POST['nama'] ?? "default";

$color = "red";

switch ($color) {
    case "red":
        echo "Your favorite color is red";
        break;
    case "yellow":
        echo "Your favorite color is yellow";
        break;
    case "green":
        echo "Your favorite color is green";
        break;
    case "blue":
        echo "Your favorite color is blue";
        break;
    case "purple":
        echo "Your favorite color is purple";
        break;
    default:
        echo "None of your favorite colors";
}
