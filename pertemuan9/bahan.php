<?php
// koneksi ke database
$connect = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($connect, "SELECT * FROM mahasiswa");
// var_dump ($result);
// if (!$result) {
//     echo mysqli_error($connect);
// }

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() = mengembalikan array numeric
// mysqli_fetch_assoc() = mengembalikan array associative
// mysqli_fetch_array() = mengembalikan keduanya
// mysqli_fetch_object() 

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs);
// var_dump($mhs[3]);

// $mhs = mysqli_fetch_assoc($result);
// // var_dump($mhs);
// var_dump($mhs["jurusan"]);

// $mhs = mysqli_fetch_array($result);
// var_dump($mhs);
// var_dump($mhs[4]);
// var_dump($mhs["jurusan"]);

// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->nama);

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
//     // var_dump($mhs["nama"]);
// }

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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Update</a> | <a href="">Delete</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
                <td><?= $row["nrp"];  ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>

    </table>
</body>

</html>