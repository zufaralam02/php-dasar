<?php
require 'functions.php';

// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST['submit'])) {

    // cek apakah data berhasil di tambahkan
    if (create($_POST) > 0) {
        // echo "success";
        echo "
            <script>
                alert('success');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        // echo "fail";
        echo "
            <script>
                alert('fail');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Data</title>
</head>

<body>
    <h1>Add Data</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">Nrp : </label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>

    </form>
</body>

</html>