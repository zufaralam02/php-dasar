<?php

// Variable Scope / Lingkup Variabel
// $x = 10;
// function tampilX()
// {
//     global $x;
//     echo $x;
// }
// tampilX();

// SUPERGLOBALS
// variable global milik PHP
// merupakan array associative
// var_dump($_GET);
// var_dump($_POST);
// var_dump($_SERVER);
// echo $_SERVER["SERVER_NAME"];

// $_GET
// $_GET["nama"] = "Allam";
// $_GET["nrp"] = "123456789";
// var_dump($_GET);

$mahasiswa = [
    [
        "nrp"       => "123456789",
        "nama"      => "Rofiif Zufar Allam",
        "email"     => "allam.it@langitpayment.com",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "avatar.png"
    ],
    [
        "nama"      => "Muhammad",
        "nrp"       => "987654321",
        "email"     => "muhammad.it@langitpayment.com",
        "jurusan"   => "Sistem Informasi",
        "gambar"    => "profile.png"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $m) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $m["nama"]; ?>&nrp=<?= $m["nrp"]; ?>&email=<?= $m["email"]; ?>&jurusan=<?= $m["jurusan"]; ?>&gambar=<?= $m["gambar"]; ?>">
                    <?= $m["nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>