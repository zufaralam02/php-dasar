<?php

// variable scope dan variable
// $x = 10;
// function show()
// {
//     global $x;
//     echo $x;
// }
// show();

// superglobals
// variable global milik PHP
// merupakan array associative
// var_dump($_GET);
// var_dump($_SERVER);
// echo $_SERVER["SERVER_NAME"];

// $_GET
// $_GET["nama"] = "Allam";
// $_GET["nim"] = "07912890419";
// var_dump($_GET);

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
        "gambar" => "profile.png"
    ],
    [
        "nama" => "Uus",
        "nim" => "1290582",
        "email" => "uus@gmail.com",
        "jurusan" => "Elektro",
        "gambar" => "user.png"
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
                <a href="latihan2.php?
                    nama=<?= $m["nama"]; ?> &
                    nim=<?= $m["nim"]; ?> & 
                    email=<?= $m["email"]; ?> & 
                    jurusan=<?= $m["jurusan"]; ?> &
                    gambar=<?= $m["gambar"]; ?>">
                    <?= $m["nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>