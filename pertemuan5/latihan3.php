<?php

$mahasiswa = [
    ["Allam", "123451", "Teknik Informatika", "allam.it@langitpayment.com"],
    ["Hasbi", "123452", "Sistem Informasi", "hasbi@gmail.com"],
    ["Alvin", "123453", "Bisnis", "alvin@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <!-- <?php foreach ($mhs as $m) : ?>
                <li><?= $m; ?></li>
            <?php endforeach; ?> -->

            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>