<?php

$mahasiswa = [
    ["Rofiif Zufar Allam", "123456789", "Teknik Informatika", "allam.it@langitpayment.com"],
    ["Rofiif Zufar Allam", "123456789", "Teknik Informatika", "allam.it@langitpayment.com"],
    ["Rofiif Zufar Allam", "123456789", "Teknik Informatika", "allam.it@langitpayment.com"]
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

    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama : <?= $m[0]; ?></li>
            <li>NRP : <?= $m[1]; ?></li>
            <li>Jurusan : <?= $m[2]; ?></li>
            <li>Email : <?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>