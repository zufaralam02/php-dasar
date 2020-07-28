<?php

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="create.php">Add Data</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Photo</th>
            <th>Nrp</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="update.php?id=<?= $row["id"]; ?>">Update</a> |
                    <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Sure ?')">Delete</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="30"></td>
                <td><?= $row["nrp"];  ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>

    </table>
</body>

</html>