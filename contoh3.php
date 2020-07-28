<?php

$siswa = [
    [
        "nama" => "Budi",
        "nim" => "102974",
        "kelas" => "12 IPA",
        "no_tlp" => "082209835209"
    ],
    [
        "nama" => "Andi",
        "nim" => "091248",
        "kelas" => "12 IPS",
        "no_tlp" => "082208359235"
    ],
    [
        "nama" => "Dewi",
        "nim" => "098214",
        "kelas" => "11 IPA",
        "no_tlp" => "087824195320"
    ],
    [
        "nama" => "Putri",
        "nim" => "129489",
        "kelas" => "11 IPS",
        "no_tlp" => "082208536784"
    ]
];

foreach ($siswa as $s) {
    echo "<ul>";
    echo "<li>" . "Nama : " . $s['nama'] . "</li>";
    echo "<li>" . "Nim : " . $s['nim'] . "</li>";
    echo "<li>" . "Kelas : " . $s['kelas'] . "</li>";
    echo "<li>" . "No Tlp : " . $s['no_tlp'] . "</li>";
    echo "</ul>";
}
