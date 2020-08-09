<?php

// $mahasiswa = [
//     ["Rofiif Zufar Allam", "123456789", "allam.it@langitpayment.com", "Teknik Informatika"],
//     ["Rofiif Zufar Allam", "123456789", "allam.it@langitpayment.com", "Teknik Informatika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nrp"       => "123456789",
        "nama"      => "Rofiif Zufar Allam",
        "email"     => "allam.it@langitpayment.com",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "avatar.png"
    ],
    [
        "nama"      => "Rofiif Zufar Allam",
        "nrp"       => "123456789",
        "email"     => "allam.it@langitpayment.com",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "profile.png"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>