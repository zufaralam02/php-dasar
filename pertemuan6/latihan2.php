<?php

// $mahasiswa = [
//     ["Allam", "2980375", "allam.it@langitpayment.com", "Teknik Informatika"],
//     ["Fathan", "9017254", "fathan@gmail.com", "Sistem Informasi"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali / bedanya
// key nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Allam",
        "nim" => "9018247",
        "email" => "allam.it@langitpayment.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "avatar.png"
    ],
    [
        "nama" => "Husnul",
        "nim" => "0791242",
        "email" => "husnul@gmail.com",
        "jurusan" => "Bisnis",
        "gambar" => "profile.png",
        // "nilai" => [
        //     80,
        //     90,
        //     100
        // ]
    ],
    [
        "nama" => "Uus",
        "nim" => "1290582",
        "email" => "uus@gmail.com",
        "jurusan" => "Elektro",
        "gambar" => "user.png"
    ],
];

// echo $mahasiswa[1]["nilai"][2];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"] ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>